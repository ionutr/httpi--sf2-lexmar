<?php

namespace Httpi\Maritime\Bundle\ImportBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use Httpi\Bundle\CoreBundle\Library\Status\Status as StatusLib;
use Httpi\Maritime\Bundle\ImportBundle\Library\Import\LexiconImport;
use Httpi\Maritime\Bundle\ImportBundle\Library\Import\GlossaryImport;

class ImportCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('lexmar:import:do')
            ->setDescription('Initial CSV Import for lexicon or glossary')
            ->addArgument('file', InputArgument::REQUIRED, 'Filename of csv file.')
            ->addArgument('type', InputArgument::OPTIONAL, 'Type of import: either lexicon or glossary', 'lexicon')
            ->addArgument('path', InputArgument::OPTIONAL, 'Path where to look for the csv file', '@HttpiMaritimeImportBundle/Resources/data/')
            ->addArgument('strategy', InputArgument::OPTIONAL, 'Duplicates strategy: either <info>duplicate</info>(create without looking to update), <info>overwrite</info>(update) or <info>ignore</info>(skip already existing entries). Defaults to "duplicate"', LexiconImport::DUPLICATES_MODE_DUPLICATE);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $kernel = $this->getContainer()->get('kernel');
        $file = $kernel->locateResource($input->getArgument('path')) . $input->getArgument('file');

        $output->write('<info>Parsing <comment>"' . $file . '"</comment> ... </info>');

        switch($input->getArgument('type')) {
            case 'glossary':
                $import = new GlossaryImport($this->getContainer()->get('doctrine')->getManager());
                $import->setTitle('Initial glossary import');
                $import->setObjectFqn('Httpi\Maritime\Bundle\CoreBundle\Entity\Glossary');
                break;

            case 'lexicon':
            default:
                $import = new LexiconImport($this->getContainer()->get('doctrine')->getManager());
                $import->setTitle('Initial lexicon import');
                $import->setObjectFqn('Httpi\Maritime\Bundle\CoreBundle\Entity\Lexicon');
                break;
        }

        $import->setSourceFile($file);
        $import->setDescription('The autoimported file during the initial process.');
        $import->setDuplicatesMode($input->getArgument('strategy'));
        $import->execute();

        $output->write(' imported <info>' . $import->getImportedRows() . '</info> rows. Ignored <error>' . $import->getIgnoredRows() . '</error> rows, iterated over <comment>' . $import->getTotalRows() . '</comment> found rows.');
    }
}
