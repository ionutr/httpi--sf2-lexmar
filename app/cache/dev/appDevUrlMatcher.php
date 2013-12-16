<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/4d73675')) {
                // _assetic_4d73675
                if ($pathinfo === '/css/4d73675.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4d73675',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_4d73675',);
                }

                if (0 === strpos($pathinfo, '/css/4d73675_')) {
                    // _assetic_4d73675_0
                    if ($pathinfo === '/css/4d73675_form_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '4d73675',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_4d73675_0',);
                    }

                    if (0 === strpos($pathinfo, '/css/4d73675_jqx.')) {
                        // _assetic_4d73675_1
                        if ($pathinfo === '/css/4d73675_jqx.base_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '4d73675',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_4d73675_1',);
                        }

                        // _assetic_4d73675_2
                        if ($pathinfo === '/css/4d73675_jqx.darkblue_3.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '4d73675',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_4d73675_2',);
                        }

                        // _assetic_4d73675_3
                        if ($pathinfo === '/css/4d73675_jqx.green_4.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '4d73675',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_4d73675_3',);
                        }

                        // _assetic_4d73675_4
                        if ($pathinfo === '/css/4d73675_jqx.red_5.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '4d73675',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_4d73675_4',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/css/2ef4c8a')) {
                // _assetic_2ef4c8a
                if ($pathinfo === '/css/2ef4c8a.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2ef4c8a',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_2ef4c8a',);
                }

                if (0 === strpos($pathinfo, '/css/2ef4c8a_')) {
                    // _assetic_2ef4c8a_0
                    if ($pathinfo === '/css/2ef4c8a_form_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '2ef4c8a',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_2ef4c8a_0',);
                    }

                    // _assetic_2ef4c8a_1
                    if ($pathinfo === '/css/2ef4c8a_dropzone_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '2ef4c8a',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_2ef4c8a_1',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js/092a7e2')) {
            // _assetic_092a7e2
            if ($pathinfo === '/js/092a7e2.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '092a7e2',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_092a7e2',);
            }

            if (0 === strpos($pathinfo, '/js/092a7e2_')) {
                // _assetic_092a7e2_0
                if ($pathinfo === '/js/092a7e2_form_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '092a7e2',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_092a7e2_0',);
                }

                // _assetic_092a7e2_1
                if ($pathinfo === '/js/092a7e2_dropzone_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '092a7e2',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_092a7e2_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/e859442')) {
            // _assetic_e859442
            if ($pathinfo === '/css/e859442.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e859442',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_e859442',);
            }

            // _assetic_e859442_0
            if ($pathinfo === '/css/e859442_reset_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e859442',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_e859442_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/ebefa89')) {
            // _assetic_ebefa89
            if ($pathinfo === '/js/ebefa89.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ebefa89',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_ebefa89',);
            }

            // _assetic_ebefa89_0
            if ($pathinfo === '/js/ebefa89_jquery.min_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ebefa89',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_ebefa89_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/d1bd413')) {
            // _assetic_d1bd413
            if ($pathinfo === '/css/d1bd413.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd1bd413',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_d1bd413',);
            }

            // _assetic_d1bd413_0
            if ($pathinfo === '/css/d1bd413_form_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd1bd413',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_d1bd413_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/4c029e5')) {
            // _assetic_4c029e5
            if ($pathinfo === '/js/4c029e5.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4c029e5',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_4c029e5',);
            }

            // _assetic_4c029e5_0
            if ($pathinfo === '/js/4c029e5_form_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4c029e5',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_4c029e5_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/99b2421')) {
                // _assetic_99b2421
                if ($pathinfo === '/css/99b2421.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '99b2421',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_99b2421',);
                }

                // _assetic_99b2421_0
                if ($pathinfo === '/css/99b2421_crud.default_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '99b2421',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_99b2421_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/1f84102')) {
                // _assetic_1f84102
                if ($pathinfo === '/css/1f84102.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1f84102',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_1f84102',);
                }

                if (0 === strpos($pathinfo, '/css/1f84102_')) {
                    // _assetic_1f84102_0
                    if ($pathinfo === '/css/1f84102_general_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1f84102',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_1f84102_0',);
                    }

                    // _assetic_1f84102_1
                    if ($pathinfo === '/css/1f84102_breadcrumbs_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1f84102',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_1f84102_1',);
                    }

                    // _assetic_1f84102_2
                    if ($pathinfo === '/css/1f84102_msgBoxLight_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1f84102',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_1f84102_2',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/5cc0278')) {
                // _assetic_5cc0278
                if ($pathinfo === '/js/5cc0278.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5cc0278',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_5cc0278',);
                }

                if (0 === strpos($pathinfo, '/js/5cc0278_')) {
                    if (0 === strpos($pathinfo, '/js/5cc0278_jq')) {
                        // _assetic_5cc0278_0
                        if ($pathinfo === '/js/5cc0278_jquery.msgBox_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '5cc0278',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_5cc0278_0',);
                        }

                        if (0 === strpos($pathinfo, '/js/5cc0278_jqx')) {
                            // _assetic_5cc0278_1
                            if ($pathinfo === '/js/5cc0278_jqxcore_2.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '5cc0278',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_5cc0278_1',);
                            }

                            // _assetic_5cc0278_2
                            if ($pathinfo === '/js/5cc0278_jqxmenu_3.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '5cc0278',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_5cc0278_2',);
                            }

                            // _assetic_5cc0278_3
                            if ($pathinfo === '/js/5cc0278_jqxbuttons_4.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '5cc0278',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_5cc0278_3',);
                            }

                        }

                    }

                    // _assetic_5cc0278_4
                    if ($pathinfo === '/js/5cc0278_run_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5cc0278',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_5cc0278_4',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/1d98e8a')) {
                // _assetic_1d98e8a
                if ($pathinfo === '/js/1d98e8a.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1d98e8a',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_1d98e8a',);
                }

                if (0 === strpos($pathinfo, '/js/1d98e8a_')) {
                    if (0 === strpos($pathinfo, '/js/1d98e8a_jq')) {
                        // _assetic_1d98e8a_0
                        if ($pathinfo === '/js/1d98e8a_jquery.min_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1d98e8a',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_1d98e8a_0',);
                        }

                        if (0 === strpos($pathinfo, '/js/1d98e8a_jqx')) {
                            // _assetic_1d98e8a_1
                            if ($pathinfo === '/js/1d98e8a_jqxcore_2.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '1d98e8a',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_1d98e8a_1',);
                            }

                            // _assetic_1d98e8a_2
                            if ($pathinfo === '/js/1d98e8a_jqxmenu_3.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '1d98e8a',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_1d98e8a_2',);
                            }

                            // _assetic_1d98e8a_3
                            if ($pathinfo === '/js/1d98e8a_jqxbuttons_4.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '1d98e8a',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_1d98e8a_3',);
                            }

                        }

                    }

                    // _assetic_1d98e8a_4
                    if ($pathinfo === '/js/1d98e8a_run_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1d98e8a',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_1d98e8a_4',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/css/3136dac')) {
            // _assetic_3136dac
            if ($pathinfo === '/css/3136dac.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '3136dac',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_3136dac',);
            }

            // _assetic_3136dac_0
            if ($pathinfo === '/css/3136dac_apydatagrid_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '3136dac',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_3136dac_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/3a43ede')) {
            // _assetic_3a43ede
            if ($pathinfo === '/js/3a43ede.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '3a43ede',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_3a43ede',);
            }

            if (0 === strpos($pathinfo, '/js/3a43ede_')) {
                if (0 === strpos($pathinfo, '/js/3a43ede_jq')) {
                    if (0 === strpos($pathinfo, '/js/3a43ede_jquery.m')) {
                        // _assetic_3a43ede_0
                        if ($pathinfo === '/js/3a43ede_jquery.min_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '3a43ede',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_3a43ede_0',);
                        }

                        // _assetic_3a43ede_1
                        if ($pathinfo === '/js/3a43ede_jquery.msgBox_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '3a43ede',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_3a43ede_1',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/js/3a43ede_jqx')) {
                        // _assetic_3a43ede_2
                        if ($pathinfo === '/js/3a43ede_jqxcore_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '3a43ede',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_3a43ede_2',);
                        }

                        // _assetic_3a43ede_3
                        if ($pathinfo === '/js/3a43ede_jqxmenu_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '3a43ede',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_3a43ede_3',);
                        }

                        // _assetic_3a43ede_4
                        if ($pathinfo === '/js/3a43ede_jqxbuttons_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '3a43ede',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_3a43ede_4',);
                        }

                    }

                }

                // _assetic_3a43ede_5
                if ($pathinfo === '/js/3a43ede_run_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3a43ede',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_3a43ede_5',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/28e4dc9')) {
            // _assetic_28e4dc9
            if ($pathinfo === '/css/28e4dc9.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '28e4dc9',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_28e4dc9',);
            }

            if (0 === strpos($pathinfo, '/css/28e4dc9_')) {
                // _assetic_28e4dc9_0
                if ($pathinfo === '/css/28e4dc9_general_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '28e4dc9',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_28e4dc9_0',);
                }

                // _assetic_28e4dc9_1
                if ($pathinfo === '/css/28e4dc9_breadcrumbs_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '28e4dc9',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_28e4dc9_1',);
                }

                // _assetic_28e4dc9_2
                if ($pathinfo === '/css/28e4dc9_msgBoxLight_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '28e4dc9',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_28e4dc9_2',);
                }

                // _assetic_28e4dc9_3
                if ($pathinfo === '/css/28e4dc9_form_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '28e4dc9',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_28e4dc9_3',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/fac1045')) {
            // _assetic_fac1045
            if ($pathinfo === '/js/fac1045.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fac1045',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_fac1045',);
            }

            if (0 === strpos($pathinfo, '/js/fac1045_')) {
                if (0 === strpos($pathinfo, '/js/fac1045_jq')) {
                    // _assetic_fac1045_0
                    if ($pathinfo === '/js/fac1045_jquery.msgBox_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'fac1045',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_fac1045_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/fac1045_jqx')) {
                        // _assetic_fac1045_1
                        if ($pathinfo === '/js/fac1045_jqxcore_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'fac1045',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_fac1045_1',);
                        }

                        // _assetic_fac1045_2
                        if ($pathinfo === '/js/fac1045_jqxmenu_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'fac1045',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_fac1045_2',);
                        }

                        // _assetic_fac1045_3
                        if ($pathinfo === '/js/fac1045_jqxbuttons_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'fac1045',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_fac1045_3',);
                        }

                    }

                }

                // _assetic_fac1045_4
                if ($pathinfo === '/js/fac1045_form_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fac1045',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_fac1045_4',);
                }

                // _assetic_fac1045_5
                if ($pathinfo === '/js/fac1045_run_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fac1045',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_fac1045_5',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/5bad48d')) {
            // _assetic_5bad48d
            if ($pathinfo === '/css/5bad48d.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5bad48d',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_5bad48d',);
            }

            if (0 === strpos($pathinfo, '/css/5bad48d_')) {
                // _assetic_5bad48d_0
                if ($pathinfo === '/css/5bad48d_general_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5bad48d',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_5bad48d_0',);
                }

                // _assetic_5bad48d_1
                if ($pathinfo === '/css/5bad48d_breadcrumbs_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5bad48d',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_5bad48d_1',);
                }

                // _assetic_5bad48d_2
                if ($pathinfo === '/css/5bad48d_msgBoxLight_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5bad48d',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_5bad48d_2',);
                }

                // _assetic_5bad48d_3
                if ($pathinfo === '/css/5bad48d_form_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5bad48d',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_5bad48d_3',);
                }

                if (0 === strpos($pathinfo, '/css/5bad48d_jqx.')) {
                    // _assetic_5bad48d_4
                    if ($pathinfo === '/css/5bad48d_jqx.base_5.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5bad48d',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_5bad48d_4',);
                    }

                    // _assetic_5bad48d_5
                    if ($pathinfo === '/css/5bad48d_jqx.darkblue_6.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5bad48d',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_5bad48d_5',);
                    }

                    // _assetic_5bad48d_6
                    if ($pathinfo === '/css/5bad48d_jqx.green_7.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5bad48d',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_5bad48d_6',);
                    }

                    // _assetic_5bad48d_7
                    if ($pathinfo === '/css/5bad48d_jqx.red_8.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5bad48d',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_5bad48d_7',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js/7632dea')) {
            // _assetic_7632dea
            if ($pathinfo === '/js/7632dea.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7632dea',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_7632dea',);
            }

            if (0 === strpos($pathinfo, '/js/7632dea_')) {
                if (0 === strpos($pathinfo, '/js/7632dea_jq')) {
                    // _assetic_7632dea_0
                    if ($pathinfo === '/js/7632dea_jquery.msgBox_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7632dea',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_7632dea_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/7632dea_jqx')) {
                        // _assetic_7632dea_1
                        if ($pathinfo === '/js/7632dea_jqxcore_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7632dea',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_7632dea_1',);
                        }

                        // _assetic_7632dea_2
                        if ($pathinfo === '/js/7632dea_jqxmenu_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7632dea',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_7632dea_2',);
                        }

                    }

                }

                // _assetic_7632dea_3
                if ($pathinfo === '/js/7632dea_run_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7632dea',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_7632dea_3',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/aa4e19f')) {
            // _assetic_aa4e19f
            if ($pathinfo === '/css/aa4e19f.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'aa4e19f',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_aa4e19f',);
            }

            if (0 === strpos($pathinfo, '/css/aa4e19f_')) {
                // _assetic_aa4e19f_0
                if ($pathinfo === '/css/aa4e19f_general_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'aa4e19f',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_aa4e19f_0',);
                }

                // _assetic_aa4e19f_1
                if ($pathinfo === '/css/aa4e19f_breadcrumbs_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'aa4e19f',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_aa4e19f_1',);
                }

                // _assetic_aa4e19f_2
                if ($pathinfo === '/css/aa4e19f_msgBoxLight_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'aa4e19f',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_aa4e19f_2',);
                }

                // _assetic_aa4e19f_3
                if ($pathinfo === '/css/aa4e19f_form_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'aa4e19f',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_aa4e19f_3',);
                }

                // _assetic_aa4e19f_4
                if ($pathinfo === '/css/aa4e19f_dropzone_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'aa4e19f',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_aa4e19f_4',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/a8352cb')) {
            // _assetic_a8352cb
            if ($pathinfo === '/js/a8352cb.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a8352cb',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_a8352cb',);
            }

            if (0 === strpos($pathinfo, '/js/a8352cb_')) {
                if (0 === strpos($pathinfo, '/js/a8352cb_jq')) {
                    // _assetic_a8352cb_0
                    if ($pathinfo === '/js/a8352cb_jquery.msgBox_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a8352cb',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_a8352cb_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/a8352cb_jqx')) {
                        // _assetic_a8352cb_1
                        if ($pathinfo === '/js/a8352cb_jqxcore_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a8352cb',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_a8352cb_1',);
                        }

                        // _assetic_a8352cb_2
                        if ($pathinfo === '/js/a8352cb_jqxmenu_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a8352cb',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_a8352cb_2',);
                        }

                        // _assetic_a8352cb_3
                        if ($pathinfo === '/js/a8352cb_jqxbuttons_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a8352cb',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_a8352cb_3',);
                        }

                    }

                }

                // _assetic_a8352cb_4
                if ($pathinfo === '/js/a8352cb_form_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a8352cb',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_a8352cb_4',);
                }

                // _assetic_a8352cb_5
                if ($pathinfo === '/js/a8352cb_run_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a8352cb',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_a8352cb_5',);
                }

                // _assetic_a8352cb_6
                if ($pathinfo === '/js/a8352cb_dropzone_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a8352cb',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_a8352cb_6',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/fe74a67')) {
            // _assetic_fe74a67
            if ($pathinfo === '/css/fe74a67.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe74a67',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_fe74a67',);
            }

            if (0 === strpos($pathinfo, '/css/fe74a67_')) {
                // _assetic_fe74a67_0
                if ($pathinfo === '/css/fe74a67_form_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe74a67',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_fe74a67_0',);
                }

                if (0 === strpos($pathinfo, '/css/fe74a67_jqx.')) {
                    // _assetic_fe74a67_1
                    if ($pathinfo === '/css/fe74a67_jqx.base_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe74a67',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_fe74a67_1',);
                    }

                    // _assetic_fe74a67_2
                    if ($pathinfo === '/css/fe74a67_jqx.darkblue_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe74a67',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_fe74a67_2',);
                    }

                    // _assetic_fe74a67_3
                    if ($pathinfo === '/css/fe74a67_jqx.green_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe74a67',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_fe74a67_3',);
                    }

                    // _assetic_fe74a67_4
                    if ($pathinfo === '/css/fe74a67_jqx.red_5.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe74a67',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_fe74a67_4',);
                    }

                }

                // _assetic_fe74a67_5
                if ($pathinfo === '/css/fe74a67_dropzone_6.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe74a67',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_fe74a67_5',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

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
