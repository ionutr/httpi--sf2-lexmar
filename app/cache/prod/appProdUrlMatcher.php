<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // httpi_core_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'httpi_core_homepage')), array (  '_controller' => 'Httpi\\Bundle\\CoreBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/admin/status')) {
            // admin_status_
            if (rtrim($pathinfo, '/') === '/admin/status') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_status_');
                }

                return array (  '_controller' => 'Httpi\\Bundle\\CoreBundle\\Controller\\StatusController::indexAction',  '_route' => 'admin_status_',);
            }

            // admin_status__show
            if (preg_match('#^/admin/status/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_status__show')), array (  '_controller' => 'Httpi\\Bundle\\CoreBundle\\Controller\\StatusController::showAction',));
            }

            // admin_status__new
            if ($pathinfo === '/admin/status/new') {
                return array (  '_controller' => 'Httpi\\Bundle\\CoreBundle\\Controller\\StatusController::newAction',  '_route' => 'admin_status__new',);
            }

            // admin_status__create
            if ($pathinfo === '/admin/status/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_status__create;
                }

                return array (  '_controller' => 'Httpi\\Bundle\\CoreBundle\\Controller\\StatusController::createAction',  '_route' => 'admin_status__create',);
            }
            not_admin_status__create:

            // admin_status__edit
            if (preg_match('#^/admin/status/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_status__edit')), array (  '_controller' => 'Httpi\\Bundle\\CoreBundle\\Controller\\StatusController::editAction',));
            }

            // admin_status__update
            if (preg_match('#^/admin/status/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_status__update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_status__update')), array (  '_controller' => 'Httpi\\Bundle\\CoreBundle\\Controller\\StatusController::updateAction',));
            }
            not_admin_status__update:

            // admin_status__delete
            if (preg_match('#^/admin/status/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_status__delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_status__delete')), array (  '_controller' => 'Httpi\\Bundle\\CoreBundle\\Controller\\StatusController::deleteAction',));
            }
            not_admin_status__delete:

        }

        // httpi_maritime_core_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'httpi_maritime_core_homepage')), array (  '_controller' => 'Httpi\\Maritime\\Bundle\\CoreBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // httpi_maritime_admin_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'httpi_maritime_admin_homepage');
                }

                return array (  '_controller' => 'Httpi\\Maritime\\Bundle\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'httpi_maritime_admin_homepage',);
            }

            if (0 === strpos($pathinfo, '/admin/lexicon')) {
                // httpi_maritime_admin_lexicon_index
                if (rtrim($pathinfo, '/') === '/admin/lexicon') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'httpi_maritime_admin_lexicon_index');
                    }

                    return array (  '_controller' => 'Httpi\\Maritime\\Bundle\\AdminBundle\\Controller\\LexiconController::indexAction',  '_route' => 'httpi_maritime_admin_lexicon_index',);
                }

                // httpi_maritime_admin_lexicon_add
                if (rtrim($pathinfo, '/') === '/admin/lexicon/add') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'httpi_maritime_admin_lexicon_add');
                    }

                    return array (  '_controller' => 'Httpi\\Maritime\\Bundle\\AdminBundle\\Controller\\LexiconController::addAction',  '_route' => 'httpi_maritime_admin_lexicon_add',);
                }

                // httpi_maritime_admin_lexicon_edit
                if (rtrim($pathinfo, '/') === '/admin/lexicon/edit') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'httpi_maritime_admin_lexicon_edit');
                    }

                    return array (  '_controller' => 'Httpi\\Maritime\\Bundle\\AdminBundle\\Controller\\LexiconController::editAction',  '_route' => 'httpi_maritime_admin_lexicon_edit',);
                }

                // httpi_maritime_admin_lexicon_delete
                if (rtrim($pathinfo, '/') === '/admin/lexicon/delete') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'httpi_maritime_admin_lexicon_delete');
                    }

                    return array (  '_controller' => 'Httpi\\Maritime\\Bundle\\AdminBundle\\Controller\\LexiconController::deleteAction',  '_route' => 'httpi_maritime_admin_lexicon_delete',);
                }

                if (0 === strpos($pathinfo, '/admin/lexicon/import')) {
                    // httpi_maritime_admin_lexicon_import
                    if (rtrim($pathinfo, '/') === '/admin/lexicon/import') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'httpi_maritime_admin_lexicon_import');
                        }

                        return array (  '_controller' => 'Httpi\\Maritime\\Bundle\\AdminBundle\\Controller\\LexiconController::importAction',  '_route' => 'httpi_maritime_admin_lexicon_import',);
                    }

                    // httpi_maritime_admin_lexicon_upload
                    if (rtrim($pathinfo, '/') === '/admin/lexicon/import/upload') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'httpi_maritime_admin_lexicon_upload');
                        }

                        return array (  '_controller' => 'Httpi\\Maritime\\Bundle\\AdminBundle\\Controller\\LexiconController::uploadAction',  '_route' => 'httpi_maritime_admin_lexicon_upload',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/glossary')) {
                // httpi_maritime_admin_glossary_index
                if (rtrim($pathinfo, '/') === '/admin/glossary') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'httpi_maritime_admin_glossary_index');
                    }

                    return array (  '_controller' => 'Httpi\\Maritime\\Bundle\\AdminBundle\\Controller\\GlossaryController::indexAction',  '_route' => 'httpi_maritime_admin_glossary_index',);
                }

                // httpi_maritime_admin_glossary_add
                if (rtrim($pathinfo, '/') === '/admin/glossary/add') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'httpi_maritime_admin_glossary_add');
                    }

                    return array (  '_controller' => 'Httpi\\Maritime\\Bundle\\AdminBundle\\Controller\\GlossaryController::addAction',  '_route' => 'httpi_maritime_admin_glossary_add',);
                }

                // httpi_maritime_admin_glossary_edit
                if (rtrim($pathinfo, '/') === '/admin/glossary/edit') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'httpi_maritime_admin_glossary_edit');
                    }

                    return array (  '_controller' => 'Httpi\\Maritime\\Bundle\\AdminBundle\\Controller\\GlossaryController::editAction',  '_route' => 'httpi_maritime_admin_glossary_edit',);
                }

                // httpi_maritime_admin_glossary_delete
                if (rtrim($pathinfo, '/') === '/admin/glossary/delete') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'httpi_maritime_admin_glossary_delete');
                    }

                    return array (  '_controller' => 'Httpi\\Maritime\\Bundle\\AdminBundle\\Controller\\GlossaryController::deleteAction',  '_route' => 'httpi_maritime_admin_glossary_delete',);
                }

            }

        }

        // httpi_maritime_import_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'httpi_maritime_import_homepage')), array (  '_controller' => 'Httpi\\Maritime\\Bundle\\ImportBundle\\Controller\\DefaultController::indexAction',));
        }

        // _uploader_upload_gallery
        if ($pathinfo === '/_uploader/gallery/upload') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not__uploader_upload_gallery;
            }

            return array (  '_controller' => 'oneup_uploader.controller.gallery:upload',  '_format' => 'json',  '_route' => '_uploader_upload_gallery',);
        }
        not__uploader_upload_gallery:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
