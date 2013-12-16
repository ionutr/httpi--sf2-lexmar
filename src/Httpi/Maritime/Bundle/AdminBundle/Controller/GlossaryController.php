<?php

namespace Httpi\Maritime\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Doctrine\ORM\QueryBuilder;

use Httpi\Bundle\CoreBundle\Controller\CrudController;
use Httpi\Bundle\CoreBundle\Library\Info\Info as InfoLib;
use Httpi\Bundle\CoreBundle\Entity\Info;
use Httpi\Bundle\CoreBundle\Entity\Import;
use Httpi\Bundle\CoreBundle\Form\ImportType;

use Httpi\Maritime\Bundle\CoreBundle\Entity\Glossary;
use Httpi\Maritime\Bundle\CoreBundle\Form\GlossaryType;

use APY\DataGridBundle\Grid\Source\Entity;
use APY\DataGridBundle\Grid\Action\RowAction;
use APY\DataGridBundle\Grid\Column\ActionsColumn;
use APY\DataGridBundle\Grid\Column\DateTimeColumn;
use APY\DataGridBundle\Grid\Column\TextColumn;
use APY\DataGridBundle\Grid\Export\CSVExport;

class GlossaryController extends CrudController
{
    protected $overwriteCrudConfiguration = array(
        // default values to be used for entity instantiation
        'defaults' => array(
            "isImported" => false,
            "isVerified" => false,
            "isPublished" => false
        ),

        // the name of the entity, e.g.: User
        'entityName' => 'Glossary',

        // form type name, full namespace, e.g.: MyBundle/Full/Namespace/UserType
        'entityFormtypeName' => 'Httpi\Maritime\Bundle\CoreBundle\Form\GlossaryType',

        // the fully qualified namespace for the entity, e.g. MyBundle/Full/Namespace/User
        'entityFqn' => 'Httpi\Maritime\Bundle\CoreBundle\Entity\Glossary',

        // the entity repository, full symfony namespace, e.g.: MyBundleFullNamespace:User
        'entityRepository' => 'HttpiMaritimeCoreBundle:Glossary',

        // the prefix to use to fetch templates
        'templateNamePrefix' => 'HttpiMaritimeAdminBundle:Glossary:',

        // path to redirect after deleting a term
        'afterDeleteRedirectPath' => 'httpi_maritime_admin_glossary_index',

        // edit route path
        'editPath' => 'httpi_maritime_admin_glossary_edit',

        // the string to be used for a single unit, defaults to 'item'
        'unitName' => 'term',

        // the string to be used for collections, defaults to 'the collection'
        'collectionName' => 'glossary database',

        // the column to be used to fetch the title of the item; if this is null, idColumn will be used instead
        'titleColumn' => 'abbr'
    );

	public function indexAction(Request $request)
    {

		// get repository
		$repository = $this->getDoctrine()
			->getRepository('HttpiMaritimeCoreBundle:Glossary');
		
		// init querybuilder
		$queryBuilder = $repository->createQueryBuilder('g')
			->leftJoin('g.info', 'i')
			->leftJoin('g.import', 'imp')
			->addSelect('i.created_at')
			->addSelect('imp.title')
			->orderBy('i.created_at', 'DESC');

		// Creates simple grid based on your entity (ORM)
        $source = new Entity('HttpiMaritimeCoreBundle:Glossary');
		$source->initQueryBuilder($queryBuilder);
		
        // Get a grid instance
        $grid = $this->get('grid');

        // Attach the source to the grid
        $grid->setSource($source);
		
		// add export
		$grid->addExport(new CSVExport("Full Export", 'glossary-' . date("Y-M-d_H-i-s"), array(), 'UTF-8'));

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
		$rowActionEdit = new RowAction('Edit', 'httpi_maritime_admin_glossary_edit');
        $rowActionEdit->setColumn('actions_column');
        /*$rowActionEdit->addRouteParameters(array(
                "grid_id" => $grid->getId(),
                "page" => $grid->getPage()
        ));*/
		$grid->addRowAction($rowActionEdit);

        // Manage the grid redirection, exports and the response of the controller
        return $grid->getGridResponse('HttpiMaritimeAdminBundle:Default:index.html.twig', array(
            'sectionTitle' => "Glossary"
         ));
    }
}