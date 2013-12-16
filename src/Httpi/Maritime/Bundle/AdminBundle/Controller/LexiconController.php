<?php

namespace Httpi\Maritime\Bundle\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use Doctrine\ORM\QueryBuilder;

use Httpi\Bundle\CoreBundle\Library\Info\Info as InfoLib;
use Httpi\Bundle\CoreBundle\Entity\Info;
use Httpi\Bundle\CoreBundle\Entity\Import;
use Httpi\Bundle\CoreBundle\Form\ImportType;
use Httpi\Bundle\CoreBundle\Controller\CrudController;

use Httpi\Maritime\Bundle\CoreBundle\Entity\Lexicon;
use Httpi\Maritime\Bundle\AdminBundle\Form\Type\LexiconType;
use Httpi\Maritime\Bundle\ImportBundle\Library\Import\LexiconImport;
use Httpi\Bundle\CoreBundle\Entity\File;
use Httpi\Bundle\CoreBundle\Library\File\FileUpload;

use APY\DataGridBundle\Grid\Source\Entity;
use APY\DataGridBundle\Grid\Action\RowAction;
use APY\DataGridBundle\Grid\Column\ActionsColumn;
use APY\DataGridBundle\Grid\Column\DateTimeColumn;
use APY\DataGridBundle\Grid\Column\TextColumn;
use APY\DataGridBundle\Grid\Export\CSVExport;

class LexiconController extends CrudController
{
    protected $overwriteCrudConfiguration = array(
        // default values to be used for entity instantiation
        'defaults' => array(
            "isImported" => false,
            "isVerified" => false,
            "isPublished" => false
        ),

        // the name of the entity, e.g.: User
        'entityName' => 'Lexicon',

        // form type name, full namespace, e.g.: MyBundle/Full/Namespace/UserType
        'entityFormtypeName' => 'Httpi\Maritime\Bundle\AdminBundle\Form\Type\LexiconType',

        // the fully qualified namespace for the entity, e.g. MyBundle/Full/Namespace/User
        'entityFqn' => 'Httpi\Maritime\Bundle\CoreBundle\Entity\Lexicon',

        // the entity repository, full symfony namespace, e.g.: MyBundleFullNamespace:User
        'entityRepository' => 'HttpiMaritimeCoreBundle:Lexicon',

        // the prefix to use to fetch templates
        'templateNamePrefix' => 'HttpiMaritimeAdminBundle:Lexicon:',

        // path to redirect after deleting a term
        'afterDeleteRedirectPath' => 'httpi_maritime_admin_lexicon_index',

        // edit route path
        'editPath' => 'httpi_maritime_admin_lexicon_edit',

        // the string to be used for a single unit, defaults to 'item'
        'unitName' => 'term',

        // the string to be used for collections, defaults to 'the collection'
        'collectionName' => 'lexicon database',

        // the column to be used to fetch the title of the item; if this is null, idColumn will be used instead
        'titleColumn' => 'abbr'
    );

	public function indexAction(Request $request)
    {
		// get repository
		$repository = $this->getDoctrine()
			->getRepository('HttpiMaritimeCoreBundle:Lexicon');
		
		// init querybuilder
		$queryBuilder = $repository->createQueryBuilder('l')
			->leftJoin('l.info', 'i')
			->leftJoin('l.import', 'imp')
			->addSelect('i.created_at')
			->addSelect('imp.title')
			->orderBy('i.created_at', 'DESC');

		//$queryBuilder->addSelect($queryBuilder->expr()->substring('l.value', '0', '100'));
		
		// Creates simple grid based on your entity (ORM)
        $source = new Entity('HttpiMaritimeCoreBundle:Lexicon');
		$source->initQueryBuilder($queryBuilder);
		
        // Get a grid instance
        $grid = $this->get('grid');

        // Attach the source to the grid
        $grid->setSource($source);
		
		// add export
		$grid->addExport(new CSVExport("Full Export", 'lexicon-' . date("Y-M-d_H-i-s"), array(), 'UTF-8'));

        // Configuration of the grid
		$columns = $grid->getColumns();
		$columns->setColumnsOrder(array(
			"id",
			"abbr",
			"value",
			"isVerified",
			"isPublished"
		));
		
		// add created at column
		$createdAtColumn = new DateTimeColumn(array(
			'field' => 'created_at',
			'id' => 'created_at',
			'title' => 'Created at',
			'size' => 110
		));
		$columns->addColumn($createdAtColumn, 4);
		
		// import column
		$importColumn = new TextColumn(array(
			'field' => 'title',
			'id' => 'title',
			'title' => 'Import',
			'size' => 50,
			'filterable' => false
		));
		$columns->addColumn($importColumn);
		
		// fine-tunes
		$columns->getColumnById('id')->setSize(30)->setTitle('Id')->setFilterable(false);
		$columns->getColumnById('abbr')->setSize(150)->setTitle('Abbreviation');
		$columns->getColumnById('value')->setSize(400)->setTitle('Content');
		$columns->getColumnById('isVerified')->setSize(20)->setTitle('V');
		$columns->getColumnById('isPublished')->setSize(20)->setTitle('P');
		$columns->getColumnById('isImported')->setSize(20)->setTitle('I');
				
		$grid->setColumns($columns);
		$grid->hideColumns(array(
			//"value"
		));
		
		$grid->setDefaultOrder("created_at", "desc");
		
		// Create an Actions Column
		$actionsColumn = new ActionsColumn('actions_column', 'Actions');
		$actionsColumn->setSize(35);
		$actionsColumn->setSeparator("<br />");
		$grid->addColumn($actionsColumn, 9);

        //$grid->setId('lexicon-datagrid');

		// Attach a rowAction to the Actions Column
		$rowActionEdit = new RowAction('Edit', 'httpi_maritime_admin_lexicon_edit');
        $rowActionEdit->setColumn('actions_column');
        /*$rowActionEdit->addRouteParameters(array(
                "grid_id" => $grid->getId(),
                "page" => $grid->getPage()
        ));*/
		$grid->addRowAction($rowActionEdit);

        // Manage the grid redirection, exports and the response of the controller
        return $grid->getGridResponse('HttpiMaritimeAdminBundle:Default:index.html.twig', array(
            'sectionTitle' => "Lexicon"
        ));
    }

	public function importAction(Request $request)
	{
		$import = new Import;
		$import->setTitle(date("Y-m-d H:i:s"));
		$import->setDescription("Lexicon Import Process");
		//$import->setInfo(InfoLib::stamp(new Info()));
		$import->setObjectFqn('Httpi\Maritime\Bundle\CoreBundle\Entity\Lexicon');

        $form = $this->createForm(new ImportType(), $import);

        // check if request was posted
        if ($request->getMethod() == 'POST') {
            // handle the post
            $form->handleRequest($request);

            // check if form is valid
            if ($form->isValid()) {// @TODO: add custom isValid() layer, check for fileIds
                // manipulate form data
                $data = $request->get('httpi_bundle_corebundle_import');
                $fileIds = explode(",", $data['fileIds']);
                $entity = $form->getData();

                // info
                $entity->setInfo(InfoLib::stamp(new Info()));

                // files
                foreach ($fileIds as $fileId) {
                    // fetch file object
                    $file = $this->getDoctrine()
                        ->getRepository('HttpiCoreBundle:File')
                        ->find($fileId);

                    // try importing
                    $import = new LexiconImport($this->getDoctrine()->getManager());
                    $import->setSourceFile($file->getPath() . $file->getFilename());
                    $import->setTitle($entity->getTitle());
                    $import->setObjectFqn('Httpi\Maritime\Bundle\CoreBundle\Entity\Lexicon');
                    $import->setDescription($entity->getDescription());
                    $import->setDuplicatesMode($request->get('withDuplicates'));
                    $import->execute();

                    // add file to import
                    $entity->addFile($file);
                }

                /* persist
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();*/

                $this->get('session')->getFlashBag()->add('flash', array(
                    "title" => $this->crudConfiguration['messages']['success'],
                    "content" => 'You have successfully completed a lexicon import! Imported: ' . $import->getImportedRows() . '. Updated: ' . $import->getUpdatedRows() . '. Ignored: ' . $import->getIgnoredRows() . '. Total: ' . $import->getTotalRows(),
                    "type" => "info",
                    "success" => true
                ));

                return $this->redirect($this->generateUrl($request->get('_route')));
            } else {
                $this->get('session')->getFlashBag()->add('flash', array(
                    "title" => $this->crudConfiguration['messages']['fail'],
                    "content" => $this->crudConfiguration['messages']['please_correct_errors'],
                    "type" => "error",
                    "success" => true
                ));
            }
        }

        $helper = $this->container->get('oneup_uploader.templating.uploader_helper');
        $endpoint = $helper->endpoint('gallery');

		return $this->render('HttpiMaritimeAdminBundle:Lexicon:import.html.twig', array(
			'form' => $form->createView()
		));
	}

    public function uploadAction(Request $request)
    {
        $upload = new FileUpload($this->getDoctrine()->getManager());
        $upload->setFiles($_FILES['file']);
        $upload->setTotalMaxSize(100 * 1024);
        $upload->setFileMaxSize(50 * 1024);
        $upload->setMimeTypes(array(
            'text/csv',
             'application/vnd.ms-excel'
        ));
        $upload->setDestinationPath($this->get('kernel')->locateResource('@HttpiCoreBundle/Resources/files/tmp/'));
        $uploadResponse = $upload->upload();

        return new JsonResponse($uploadResponse->getData(), $uploadResponse->getCode());
    }
}