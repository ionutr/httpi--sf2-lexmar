<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'httpi_core_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Httpi\\Bundle\\CoreBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
        'admin_status_' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Httpi\\Bundle\\CoreBundle\\Controller\\StatusController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/status/',    ),  ),  4 =>   array (  ),),
        'admin_status__show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Httpi\\Bundle\\CoreBundle\\Controller\\StatusController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/status',    ),  ),  4 =>   array (  ),),
        'admin_status__new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Httpi\\Bundle\\CoreBundle\\Controller\\StatusController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/status/new',    ),  ),  4 =>   array (  ),),
        'admin_status__create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Httpi\\Bundle\\CoreBundle\\Controller\\StatusController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/status/create',    ),  ),  4 =>   array (  ),),
        'admin_status__edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Httpi\\Bundle\\CoreBundle\\Controller\\StatusController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/status',    ),  ),  4 =>   array (  ),),
        'admin_status__update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Httpi\\Bundle\\CoreBundle\\Controller\\StatusController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/status',    ),  ),  4 =>   array (  ),),
        'admin_status__delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Httpi\\Bundle\\CoreBundle\\Controller\\StatusController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/status',    ),  ),  4 =>   array (  ),),
        'httpi_maritime_core_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Httpi\\Maritime\\Bundle\\CoreBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
        'httpi_maritime_admin_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Httpi\\Maritime\\Bundle\\AdminBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),),
        'httpi_maritime_admin_lexicon_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Httpi\\Maritime\\Bundle\\AdminBundle\\Controller\\LexiconController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/lexicon/',    ),  ),  4 =>   array (  ),),
        'httpi_maritime_admin_lexicon_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Httpi\\Maritime\\Bundle\\AdminBundle\\Controller\\LexiconController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/lexicon/add/',    ),  ),  4 =>   array (  ),),
        'httpi_maritime_admin_lexicon_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Httpi\\Maritime\\Bundle\\AdminBundle\\Controller\\LexiconController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/lexicon/edit/',    ),  ),  4 =>   array (  ),),
        'httpi_maritime_admin_lexicon_delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Httpi\\Maritime\\Bundle\\AdminBundle\\Controller\\LexiconController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/lexicon/delete/',    ),  ),  4 =>   array (  ),),
        'httpi_maritime_admin_lexicon_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Httpi\\Maritime\\Bundle\\AdminBundle\\Controller\\LexiconController::importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/lexicon/import/',    ),  ),  4 =>   array (  ),),
        'httpi_maritime_admin_glossary_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Httpi\\Maritime\\Bundle\\AdminBundle\\Controller\\GlossaryController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/glossary/',    ),  ),  4 =>   array (  ),),
        'httpi_maritime_admin_glossary_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Httpi\\Maritime\\Bundle\\AdminBundle\\Controller\\GlossaryController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/glossary/add/',    ),  ),  4 =>   array (  ),),
        'httpi_maritime_import_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Httpi\\Maritime\\Bundle\\ImportBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
