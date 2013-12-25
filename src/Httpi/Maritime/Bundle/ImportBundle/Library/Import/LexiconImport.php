<?php

namespace Httpi\Maritime\Bundle\ImportBundle\Library\Import;

use Httpi\Bundle\CoreBundle\Entity\File;
use Httpi\Bundle\CoreBundle\Library\Import\FileImport;

class LexiconImport extends FileImport {

    const DUPLICATES_MODE_OVERWRITE = 'overwrite';

    const DUPLICATES_MODE_IGNORE = 'ignore';

    const DUPLICATES_MODE_DUPLICATE = 'duplicate';

    protected $filesNo = 0;

    protected $ignoredRows = 0;

    protected $importedRows = 0;

    protected $updatedRows = 0;

    protected $totalRows = 0;

    protected $totalSize = 0;

    protected $duplicatesMode = 'overwrite';

    protected $entityFqn = 'HttpiMaritimeCoreBundle:Lexicon';

    protected $entityTable = 'lexicon';

    public function setDuplicatesMode($mode = self::DUPLICATES_MODE_OVERWRITE)
    {
        $this->duplicatesMode = $mode;
    }

    public function execute()
    {
        // call parent core execution first
        $this->keepTransaction(true);
        parent::execute();
        $this->beginTransaction();

        // iterate registered file ids
        foreach ($this->fileIds as $fileId) {

            $file = $this->em->find('HttpiCoreBundle:File', $fileId);
            $this->processFile($file);
            $this->filesNo++;
            $this->totalSize += $file->getSize();
        }

        // update import object
        $this->em->getConnection()->update('import', array(
            'ended_at' => date("Y-m-d H:i:s"),
            'success' => 1,
            'rows' => $this->importedRows,
            'size' => $this->totalSize
        ), array(
            'id' => $this->getId()
        ));

        // commit transaction
        $this->commitTransaction();
    }

    public function getImportedRows()
    {
        return $this->importedRows;
    }

    public function getUpdatedRows()
    {
        return $this->updatedRows;
    }

    public function getIgnoredRows()
    {
        return $this->ignoredRows;
    }

    public function getTotalRows()
    {
        return $this->totalRows;
    }

    private function processFile(File $file)
    {
        if (($handle = fopen($file->getPath() . $file->getFilename(), "r")) !== FALSE) {

            while (($data = fgetcsv($handle, null, ";")) !== FALSE) {
                $this->totalRows++;
                if (count($data) !== 2) {
                    throw new \Exception('Unexpected row format(expected 2 columns, got ' . count($data) . ' on row ' . $this->importedRows . '. The row: ' . var_export($data));
                }

                $key = trim($data[0]);
                $value = trim($data[1]);

                if ($this->isValidKeyValuePair($key, $value)) {
                    $this->writeData($key, $value, $this->getId());
                }
            }
            fclose($handle);
        }
    }

    private function isValidKeyValuePair($key, $value)
    {
        if ($key == "" && $value == "") {
            $this->ignoredRows++;
            return false;
        }

        return true;
    }

    private function writeData($key, $value, $importId = null)
    {
        $connection = $this->em->getConnection();

        switch ($this->duplicatesMode) {

            case self::DUPLICATES_MODE_IGNORE:

                // verify if entity exists, if so, ignore it
                $query = $this->em->createQuery(
                    'SELECT l
                    FROM ' . $this->entityFqn .  ' l
                    WHERE abbr = :abbr'
                )->setParameter('abbr', $key);
                $lexicon = $query->getArrayResult();

                if (!empty($lexicon)) {
                    $this->ignoredRows++;
                    return null;
                }

                break;

            case self::DUPLICATES_MODE_DUPLICATE:

                $connection->insert('info', array(
                    'created_at' => date("Y-m-d H:i:s"),
                    'created_by_user_id' => 1
                ));
                $infoId = $connection->lastInsertId();

                $connection->insert($this->entityTable, array(
                    'abbr' => $key,
                    'value' => $value,
                    'is_verified' => 0,
                    'is_published' => 0,
                    'is_imported' => 1,
                    'info_id' => $infoId,
                    'import_id' => $this->getId()
                ));

                $this->importedRows++;

                break;

            case self::DUPLICATES_MODE_OVERWRITE:
            default:

                // verify if entity exists, if so, update it, otherwise insert it
                $query = $this->em->createQuery(
                    'SELECT l, i.id as infoId
                     FROM ' . $this->entityFqn . '  l
                     LEFT JOIN l.info i
                     WHERE l.abbr = :abbr'
                )->setParameter('abbr', $key);
                $lexicon = $query->getArrayResult();

                if (!empty($lexicon)) {

                    $lexicon = $lexicon[0];

                    // update info object with last modified
                    $connection->update('info', array(
                        'modified_at' => date("Y-m-d H:i:s"),
                        'last_modified_by_user_id' => 1
                    ), array(
                        'id' => $lexicon['infoId']
                    ));

                    // update lexicon object
                    $connection->update($this->entityTable, array(
                        'value' => $value,
                        'is_imported' => 1
                    ), array(
                        'id' => $lexicon[0]['id']
                    ));

                    $this->updatedRows++;

                } else {
                    $connection->insert('info', array(
                        'created_at' => date("Y-m-d H:i:s"),
                        'created_by_user_id' => 1
                    ));
                    $infoId = $connection->lastInsertId();

                    $connection->insert($this->entityTable, array(
                        'abbr' => $key,
                        'value' => $value,
                        'is_verified' => 0,
                        'is_published' => 0,
                        'is_imported' => 1,
                        'info_id' => $infoId,
                        'import_id' => $this->getId()
                    ));

                    $this->importedRows++;
                }
                break;

        }
        return $connection->lastInsertId();
    }
}