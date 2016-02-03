<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * marparaiso1clDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class marparaiso1clDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/fonts')) {
            if (0 === strpos($pathinfo, '/fonts/FontAwesome')) {
                // _assetic_font_awesome_otf
                if ($pathinfo === '/fonts/FontAwesome.otf') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'font_awesome_otf',  'pos' => NULL,  '_format' => 'otf',  '_route' => '_assetic_font_awesome_otf',);
                }

                // _assetic_font_awesome_otf_0
                if ($pathinfo === '/fonts/FontAwesome_FontAwesome_1.otf') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'font_awesome_otf',  'pos' => 0,  '_format' => 'otf',  '_route' => '_assetic_font_awesome_otf_0',);
                }

            }

            if (0 === strpos($pathinfo, '/fonts/fontawesome-webfont')) {
                // _assetic_font_awesome_eot
                if ($pathinfo === '/fonts/fontawesome-webfont.eot') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'font_awesome_eot',  'pos' => NULL,  '_format' => 'eot',  '_route' => '_assetic_font_awesome_eot',);
                }

                // _assetic_font_awesome_eot_0
                if ($pathinfo === '/fonts/fontawesome-webfont_fontawesome-webfont_1.eot') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'font_awesome_eot',  'pos' => 0,  '_format' => 'eot',  '_route' => '_assetic_font_awesome_eot_0',);
                }

                // _assetic_font_awesome_svg
                if ($pathinfo === '/fonts/fontawesome-webfont.svg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'font_awesome_svg',  'pos' => NULL,  '_format' => 'svg',  '_route' => '_assetic_font_awesome_svg',);
                }

                // _assetic_font_awesome_svg_0
                if ($pathinfo === '/fonts/fontawesome-webfont_fontawesome-webfont_1.svg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'font_awesome_svg',  'pos' => 0,  '_format' => 'svg',  '_route' => '_assetic_font_awesome_svg_0',);
                }

                // _assetic_font_awesome_ttf
                if ($pathinfo === '/fonts/fontawesome-webfont.ttf') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'font_awesome_ttf',  'pos' => NULL,  '_format' => 'ttf',  '_route' => '_assetic_font_awesome_ttf',);
                }

                // _assetic_font_awesome_ttf_0
                if ($pathinfo === '/fonts/fontawesome-webfont_fontawesome-webfont_1.ttf') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'font_awesome_ttf',  'pos' => 0,  '_format' => 'ttf',  '_route' => '_assetic_font_awesome_ttf_0',);
                }

                // _assetic_font_awesome_woff
                if ($pathinfo === '/fonts/fontawesome-webfont.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'font_awesome_woff',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_font_awesome_woff',);
                }

                // _assetic_font_awesome_woff_0
                if ($pathinfo === '/fonts/fontawesome-webfont_fontawesome-webfont_1.woff') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'font_awesome_woff',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_font_awesome_woff_0',);
                }

                // _assetic_font_awesome_woff2
                if ($pathinfo === '/fonts/fontawesome-webfont.woff2') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'font_awesome_woff2',  'pos' => NULL,  '_format' => 'woff2',  '_route' => '_assetic_font_awesome_woff2',);
                }

                // _assetic_font_awesome_woff2_0
                if ($pathinfo === '/fonts/fontawesome-webfont_fontawesome-webfont_1.woff2') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'font_awesome_woff2',  'pos' => 0,  '_format' => 'woff2',  '_route' => '_assetic_font_awesome_woff2_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/font-awesome.min')) {
            // _assetic_font_awesome_css
            if ($pathinfo === '/css/font-awesome.min.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'font_awesome_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_font_awesome_css',);
            }

            // _assetic_font_awesome_css_0
            if ($pathinfo === '/css/font-awesome.min_font-awesome.min_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'font_awesome_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_font_awesome_css_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/jquery')) {
            if (0 === strpos($pathinfo, '/js/jquery.min')) {
                // _assetic_jquery_js
                if ($pathinfo === '/js/jquery.min.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_jquery_js',);
                }

                // _assetic_jquery_js_0
                if ($pathinfo === '/js/jquery.min_jquery.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_jquery_js_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/jquery-ui.min')) {
                // _assetic_jqueryui_js
                if ($pathinfo === '/js/jquery-ui.min.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jqueryui_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_jqueryui_js',);
                }

                // _assetic_jqueryui_js_0
                if ($pathinfo === '/js/jquery-ui.min_jquery-ui.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jqueryui_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_jqueryui_js_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/jquery-ui.min')) {
            // _assetic_jqueryui_css
            if ($pathinfo === '/css/jquery-ui.min.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'jqueryui_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_jqueryui_css',);
            }

            // _assetic_jqueryui_css_0
            if ($pathinfo === '/css/jquery-ui.min_jquery-ui.min_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'jqueryui_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_jqueryui_css_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/fileinput.min')) {
            // _assetic_fileinput_js
            if ($pathinfo === '/js/fileinput.min.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fileinput_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_fileinput_js',);
            }

            // _assetic_fileinput_js_0
            if ($pathinfo === '/js/fileinput.min_fileinput.min_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fileinput_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_fileinput_js_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/fileinput.min')) {
            // _assetic_fileinput_css
            if ($pathinfo === '/css/fileinput.min.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fileinput_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_fileinput_css',);
            }

            // _assetic_fileinput_css_0
            if ($pathinfo === '/css/fileinput.min_fileinput.min_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fileinput_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_fileinput_css_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/analytics')) {
            // _assetic_analytics_js
            if ($pathinfo === '/js/analytics.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'analytics_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_analytics_js',);
            }

            // _assetic_analytics_js_0
            if ($pathinfo === '/js/analytics_analytics_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'analytics_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_analytics_js_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/uni')) {
            if (0 === strpos($pathinfo, '/css/uniAdmin')) {
                // _assetic_uniAdmin_css
                if ($pathinfo === '/css/uniAdmin.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniAdmin_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_uniAdmin_css',);
                }

                if (0 === strpos($pathinfo, '/css/uniAdmin_')) {
                    if (0 === strpos($pathinfo, '/css/uniAdmin_build_')) {
                        // _assetic_uniAdmin_css_0
                        if ($pathinfo === '/css/uniAdmin_build_1.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniAdmin_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_uniAdmin_css_0',);
                        }

                        // _assetic_uniAdmin_css_1
                        if ($pathinfo === '/css/uniAdmin_build_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniAdmin_css',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_uniAdmin_css_1',);
                        }

                    }

                    // _assetic_uniAdmin_css_2
                    if ($pathinfo === '/css/uniAdmin_form_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniAdmin_css',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_uniAdmin_css_2',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/css/uniPage')) {
                // _assetic_uniPage_css
                if ($pathinfo === '/css/uniPage.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniPage_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_uniPage_css',);
                }

                // _assetic_uniPage_css_0
                if ($pathinfo === '/css/uniPage_build_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniPage_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_uniPage_css_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/uni')) {
            if (0 === strpos($pathinfo, '/js/uniAdmin')) {
                // _assetic_uniAdmin_js
                if ($pathinfo === '/js/uniAdmin.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniAdmin_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_uniAdmin_js',);
                }

                if (0 === strpos($pathinfo, '/js/uniAdmin_')) {
                    // _assetic_uniAdmin_js_0
                    if ($pathinfo === '/js/uniAdmin_transition_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniAdmin_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_uniAdmin_js_0',);
                    }

                    // _assetic_uniAdmin_js_1
                    if ($pathinfo === '/js/uniAdmin_alert_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniAdmin_js',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_uniAdmin_js_1',);
                    }

                    // _assetic_uniAdmin_js_2
                    if ($pathinfo === '/js/uniAdmin_button_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniAdmin_js',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_uniAdmin_js_2',);
                    }

                    if (0 === strpos($pathinfo, '/js/uniAdmin_c')) {
                        // _assetic_uniAdmin_js_3
                        if ($pathinfo === '/js/uniAdmin_carousel_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniAdmin_js',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_uniAdmin_js_3',);
                        }

                        // _assetic_uniAdmin_js_4
                        if ($pathinfo === '/js/uniAdmin_collapse_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniAdmin_js',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_uniAdmin_js_4',);
                        }

                    }

                    // _assetic_uniAdmin_js_5
                    if ($pathinfo === '/js/uniAdmin_dropdown_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniAdmin_js',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_uniAdmin_js_5',);
                    }

                    // _assetic_uniAdmin_js_6
                    if ($pathinfo === '/js/uniAdmin_modal_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniAdmin_js',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_uniAdmin_js_6',);
                    }

                    // _assetic_uniAdmin_js_7
                    if ($pathinfo === '/js/uniAdmin_tooltip_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniAdmin_js',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_uniAdmin_js_7',);
                    }

                    // _assetic_uniAdmin_js_8
                    if ($pathinfo === '/js/uniAdmin_popover_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniAdmin_js',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_uniAdmin_js_8',);
                    }

                    // _assetic_uniAdmin_js_9
                    if ($pathinfo === '/js/uniAdmin_scrollspy_10.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniAdmin_js',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_uniAdmin_js_9',);
                    }

                    // _assetic_uniAdmin_js_10
                    if ($pathinfo === '/js/uniAdmin_tab_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniAdmin_js',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_uniAdmin_js_10',);
                    }

                    // _assetic_uniAdmin_js_11
                    if ($pathinfo === '/js/uniAdmin_affix_12.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniAdmin_js',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_uniAdmin_js_11',);
                    }

                    // _assetic_uniAdmin_js_12
                    if ($pathinfo === '/js/uniAdmin_bootstrap-switch_13.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniAdmin_js',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_uniAdmin_js_12',);
                    }

                    // _assetic_uniAdmin_js_13
                    if ($pathinfo === '/js/uniAdmin_sb-admin-2_14.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniAdmin_js',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_uniAdmin_js_13',);
                    }

                    // _assetic_uniAdmin_js_14
                    if ($pathinfo === '/js/uniAdmin_metisMenu_15.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniAdmin_js',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_uniAdmin_js_14',);
                    }

                    // _assetic_uniAdmin_js_15
                    if ($pathinfo === '/js/uniAdmin_uniAdmin-main_16.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniAdmin_js',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_uniAdmin_js_15',);
                    }

                    // _assetic_uniAdmin_js_16
                    if ($pathinfo === '/js/uniAdmin_bc-bootstrap-collection_17.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniAdmin_js',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_uniAdmin_js_16',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/uniPage')) {
                // _assetic_uniPage_js
                if ($pathinfo === '/js/uniPage.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniPage_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_uniPage_js',);
                }

                if (0 === strpos($pathinfo, '/js/uniPage_')) {
                    // _assetic_uniPage_js_0
                    if ($pathinfo === '/js/uniPage_transition_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniPage_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_uniPage_js_0',);
                    }

                    // _assetic_uniPage_js_1
                    if ($pathinfo === '/js/uniPage_alert_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniPage_js',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_uniPage_js_1',);
                    }

                    // _assetic_uniPage_js_2
                    if ($pathinfo === '/js/uniPage_button_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniPage_js',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_uniPage_js_2',);
                    }

                    if (0 === strpos($pathinfo, '/js/uniPage_c')) {
                        // _assetic_uniPage_js_3
                        if ($pathinfo === '/js/uniPage_carousel_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniPage_js',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_uniPage_js_3',);
                        }

                        // _assetic_uniPage_js_4
                        if ($pathinfo === '/js/uniPage_collapse_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniPage_js',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_uniPage_js_4',);
                        }

                    }

                    // _assetic_uniPage_js_5
                    if ($pathinfo === '/js/uniPage_dropdown_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniPage_js',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_uniPage_js_5',);
                    }

                    // _assetic_uniPage_js_6
                    if ($pathinfo === '/js/uniPage_modal_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniPage_js',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_uniPage_js_6',);
                    }

                    // _assetic_uniPage_js_7
                    if ($pathinfo === '/js/uniPage_tooltip_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniPage_js',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_uniPage_js_7',);
                    }

                    // _assetic_uniPage_js_8
                    if ($pathinfo === '/js/uniPage_popover_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniPage_js',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_uniPage_js_8',);
                    }

                    // _assetic_uniPage_js_9
                    if ($pathinfo === '/js/uniPage_scrollspy_10.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniPage_js',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_uniPage_js_9',);
                    }

                    // _assetic_uniPage_js_10
                    if ($pathinfo === '/js/uniPage_tab_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniPage_js',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_uniPage_js_10',);
                    }

                    // _assetic_uniPage_js_11
                    if ($pathinfo === '/js/uniPage_affix_12.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniPage_js',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_uniPage_js_11',);
                    }

                    if (0 === strpos($pathinfo, '/js/uniPage_c')) {
                        // _assetic_uniPage_js_12
                        if ($pathinfo === '/js/uniPage_cbpAnimatedHeader_13.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniPage_js',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_uniPage_js_12',);
                        }

                        // _assetic_uniPage_js_13
                        if ($pathinfo === '/js/uniPage_classie_14.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniPage_js',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_uniPage_js_13',);
                        }

                    }

                    // _assetic_uniPage_js_14
                    if ($pathinfo === '/js/uniPage_uniPage-main_15.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'uniPage_js',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_uniPage_js_14',);
                    }

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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            if (0 === strpos($pathinfo, '/user/manage')) {
                // user
                if (rtrim($pathinfo, '/') === '/user/manage') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user');
                    }

                    return array (  '_controller' => 'Uni\\UserBundle\\Controller\\ManageController::indexAction',  '_route' => 'user',);
                }
                not_user:

                // user_show
                if (preg_match('#^/user/manage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'Uni\\UserBundle\\Controller\\ManageController::showAction',));
                }

                // user_new
                if ($pathinfo === '/user/manage/new') {
                    return array (  '_controller' => 'Uni\\UserBundle\\Controller\\ManageController::newAction',  '_route' => 'user_new',);
                }

                // user_create
                if ($pathinfo === '/user/manage/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_user_create;
                    }

                    return array (  '_controller' => 'Uni\\UserBundle\\Controller\\ManageController::createAction',  '_route' => 'user_create',);
                }
                not_user_create:

                // user_manage_edit
                if (preg_match('#^/user/manage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_manage_edit')), array (  '_controller' => 'Uni\\UserBundle\\Controller\\ManageController::editAction',));
                }

                // user_manage_update
                if (preg_match('#^/user/manage/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_user_manage_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_manage_update')), array (  '_controller' => 'Uni\\UserBundle\\Controller\\ManageController::updateAction',));
                }
                not_user_manage_update:

                // user_manage_delete
                if (preg_match('#^/user/manage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_user_manage_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_manage_delete')), array (  '_controller' => 'Uni\\UserBundle\\Controller\\ManageController::deleteAction',));
                }
                not_user_manage_delete:

                // user_manage_send
                if ($pathinfo === '/user/manage/send') {
                    return array (  '_controller' => 'Uni\\UserBundle\\Controller\\ManageController::sendAction',  '_route' => 'user_manage_send',);
                }

            }

            if (0 === strpos($pathinfo, '/user/profile')) {
                // user_profile_show
                if (rtrim($pathinfo, '/') === '/user/profile') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user_profile_show');
                    }

                    return array (  '_controller' => 'Uni\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'user_profile_show',);
                }

                // user_profile_edit
                if ($pathinfo === '/user/profile/edit') {
                    return array (  '_controller' => 'Uni\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'user_profile_edit',);
                }

                // user_profile_update
                if ($pathinfo === '/user/profile/update') {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_user_profile_update;
                    }

                    return array (  '_controller' => 'Uni\\UserBundle\\Controller\\ProfileController::updateAction',  '_route' => 'user_profile_update',);
                }
                not_user_profile_update:

                // user_change_password
                if ($pathinfo === '/user/profile/change-password') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_user_change_password;
                    }

                    return array (  '_controller' => 'Uni\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'user_change_password',);
                }
                not_user_change_password:

            }

            if (0 === strpos($pathinfo, '/user/register')) {
                // user_registration_register
                if (rtrim($pathinfo, '/') === '/user/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user_registration_register');
                    }

                    return array (  '_controller' => 'Uni\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/user/register/c')) {
                    // user_registration_check_email
                    if ($pathinfo === '/user/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_user_registration_check_email;
                        }

                        return array (  '_controller' => 'Uni\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'user_registration_check_email',);
                    }
                    not_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/user/register/confirm')) {
                        // user_registration_confirm
                        if (preg_match('#^/user/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_registration_confirm')), array (  '_controller' => 'Uni\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_user_registration_confirm:

                        // user_registration_confirmed
                        if ($pathinfo === '/user/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'Uni\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'user_registration_confirmed',);
                        }
                        not_user_registration_confirmed:

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/link')) {
                // link
                if (rtrim($pathinfo, '/') === '/admin/link') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_link;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'link');
                    }

                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\LinkController::indexAction',  '_route' => 'link',);
                }
                not_link:

                // link_show
                if (preg_match('#^/admin/link/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'link_show')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\LinkController::showAction',));
                }

                // link_new
                if ($pathinfo === '/admin/link/new') {
                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\LinkController::newAction',  '_route' => 'link_new',);
                }

                // link_create
                if ($pathinfo === '/admin/link/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_link_create;
                    }

                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\LinkController::createAction',  '_route' => 'link_create',);
                }
                not_link_create:

                // link_edit
                if (preg_match('#^/admin/link/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'link_edit')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\LinkController::editAction',));
                }

                // link_update
                if (preg_match('#^/admin/link/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_link_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'link_update')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\LinkController::updateAction',));
                }
                not_link_update:

                // link_delete
                if (preg_match('#^/admin/link/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_link_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'link_delete')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\LinkController::deleteAction',));
                }
                not_link_delete:

            }

            if (0 === strpos($pathinfo, '/admin/membercourse')) {
                // membercourse
                if (rtrim($pathinfo, '/') === '/admin/membercourse') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_membercourse;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'membercourse');
                    }

                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\MemberCourseController::indexAction',  '_route' => 'membercourse',);
                }
                not_membercourse:

                // membercourse_show
                if (preg_match('#^/admin/membercourse/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'membercourse_show')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\MemberCourseController::showAction',));
                }

                // membercourse_new
                if ($pathinfo === '/admin/membercourse/new') {
                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\MemberCourseController::newAction',  '_route' => 'membercourse_new',);
                }

                // membercourse_create
                if ($pathinfo === '/admin/membercourse/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_membercourse_create;
                    }

                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\MemberCourseController::createAction',  '_route' => 'membercourse_create',);
                }
                not_membercourse_create:

                // membercourse_edit
                if (preg_match('#^/admin/membercourse/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'membercourse_edit')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\MemberCourseController::editAction',));
                }

                // membercourse_update
                if (preg_match('#^/admin/membercourse/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_membercourse_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'membercourse_update')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\MemberCourseController::updateAction',));
                }
                not_membercourse_update:

                // membercourse_delete
                if (preg_match('#^/admin/membercourse/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_membercourse_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'membercourse_delete')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\MemberCourseController::deleteAction',));
                }
                not_membercourse_delete:

            }

            if (0 === strpos($pathinfo, '/admin/d')) {
                if (0 === strpos($pathinfo, '/admin/document')) {
                    // document
                    if (rtrim($pathinfo, '/') === '/admin/document') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_document;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'document');
                        }

                        return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\DocumentController::indexAction',  '_route' => 'document',);
                    }
                    not_document:

                    // document_show
                    if (preg_match('#^/admin/document/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_show')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\DocumentController::showAction',));
                    }

                    // document_new
                    if ($pathinfo === '/admin/document/new') {
                        return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\DocumentController::newAction',  '_route' => 'document_new',);
                    }

                    // document_create
                    if ($pathinfo === '/admin/document/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_document_create;
                        }

                        return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\DocumentController::createAction',  '_route' => 'document_create',);
                    }
                    not_document_create:

                    // document_edit
                    if (preg_match('#^/admin/document/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_edit')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\DocumentController::editAction',));
                    }

                    // document_update
                    if (preg_match('#^/admin/document/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_document_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_update')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\DocumentController::updateAction',));
                    }
                    not_document_update:

                    // document_delete
                    if (preg_match('#^/admin/document/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_document_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_delete')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\DocumentController::deleteAction',));
                    }
                    not_document_delete:

                }

                // dashboard
                if (rtrim($pathinfo, '/') === '/admin/dashboard') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_dashboard;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'dashboard');
                    }

                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\DashboardController::indexAction',  '_route' => 'dashboard',);
                }
                not_dashboard:

            }

            if (0 === strpos($pathinfo, '/admin/camera')) {
                // camera
                if (rtrim($pathinfo, '/') === '/admin/camera') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_camera;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'camera');
                    }

                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\CameraController::indexAction',  '_route' => 'camera',);
                }
                not_camera:

                // camera_show
                if (preg_match('#^/admin/camera/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'camera_show')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\CameraController::showAction',));
                }

                // camera_new
                if ($pathinfo === '/admin/camera/new') {
                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\CameraController::newAction',  '_route' => 'camera_new',);
                }

                // camera_create
                if ($pathinfo === '/admin/camera/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_camera_create;
                    }

                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\CameraController::createAction',  '_route' => 'camera_create',);
                }
                not_camera_create:

                // camera_edit
                if (preg_match('#^/admin/camera/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'camera_edit')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\CameraController::editAction',));
                }

                // camera_update
                if (preg_match('#^/admin/camera/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_camera_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'camera_update')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\CameraController::updateAction',));
                }
                not_camera_update:

                // camera_delete
                if (preg_match('#^/admin/camera/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_camera_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'camera_delete')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\CameraController::deleteAction',));
                }
                not_camera_delete:

            }

            if (0 === strpos($pathinfo, '/admin/p')) {
                if (0 === strpos($pathinfo, '/admin/process')) {
                    // process
                    if (rtrim($pathinfo, '/') === '/admin/process') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_process;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'process');
                        }

                        return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ProcessController::indexAction',  '_route' => 'process',);
                    }
                    not_process:

                    // process_show
                    if (preg_match('#^/admin/process/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'process_show')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ProcessController::showAction',));
                    }

                    // process_new
                    if ($pathinfo === '/admin/process/new') {
                        return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ProcessController::newAction',  '_route' => 'process_new',);
                    }

                    // process_create
                    if ($pathinfo === '/admin/process/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_process_create;
                        }

                        return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ProcessController::createAction',  '_route' => 'process_create',);
                    }
                    not_process_create:

                    // process_edit
                    if (preg_match('#^/admin/process/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'process_edit')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ProcessController::editAction',));
                    }

                    // process_update
                    if (preg_match('#^/admin/process/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_process_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'process_update')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ProcessController::updateAction',));
                    }
                    not_process_update:

                    // process_delete
                    if (preg_match('#^/admin/process/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_process_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'process_delete')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ProcessController::deleteAction',));
                    }
                    not_process_delete:

                }

                if (0 === strpos($pathinfo, '/admin/publication')) {
                    // publication
                    if (rtrim($pathinfo, '/') === '/admin/publication') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_publication;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'publication');
                        }

                        return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\PublicationController::indexAction',  '_route' => 'publication',);
                    }
                    not_publication:

                    // publication_show
                    if (preg_match('#^/admin/publication/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'publication_show')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\PublicationController::showAction',));
                    }

                    // publication_new
                    if ($pathinfo === '/admin/publication/new') {
                        return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\PublicationController::newAction',  '_route' => 'publication_new',);
                    }

                    // publication_create
                    if ($pathinfo === '/admin/publication/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_publication_create;
                        }

                        return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\PublicationController::createAction',  '_route' => 'publication_create',);
                    }
                    not_publication_create:

                    // publication_edit
                    if (preg_match('#^/admin/publication/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'publication_edit')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\PublicationController::editAction',));
                    }

                    // publication_update
                    if (preg_match('#^/admin/publication/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_publication_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'publication_update')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\PublicationController::updateAction',));
                    }
                    not_publication_update:

                    // publication_delete
                    if (preg_match('#^/admin/publication/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_publication_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'publication_delete')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\PublicationController::deleteAction',));
                    }
                    not_publication_delete:

                }

                if (0 === strpos($pathinfo, '/admin/product')) {
                    if (0 === strpos($pathinfo, '/admin/productcategory')) {
                        // productcategory
                        if (rtrim($pathinfo, '/') === '/admin/productcategory') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_productcategory;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'productcategory');
                            }

                            return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ProductCategoryController::indexAction',  '_route' => 'productcategory',);
                        }
                        not_productcategory:

                        // productcategory_show
                        if (preg_match('#^/admin/productcategory/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'productcategory_show')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ProductCategoryController::showAction',));
                        }

                        // productcategory_new
                        if ($pathinfo === '/admin/productcategory/new') {
                            return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ProductCategoryController::newAction',  '_route' => 'productcategory_new',);
                        }

                        // productcategory_create
                        if ($pathinfo === '/admin/productcategory/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_productcategory_create;
                            }

                            return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ProductCategoryController::createAction',  '_route' => 'productcategory_create',);
                        }
                        not_productcategory_create:

                        // productcategory_edit
                        if (preg_match('#^/admin/productcategory/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'productcategory_edit')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ProductCategoryController::editAction',));
                        }

                        // productcategory_update
                        if (preg_match('#^/admin/productcategory/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_productcategory_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'productcategory_update')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ProductCategoryController::updateAction',));
                        }
                        not_productcategory_update:

                        // productcategory_delete
                        if (preg_match('#^/admin/productcategory/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_productcategory_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'productcategory_delete')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ProductCategoryController::deleteAction',));
                        }
                        not_productcategory_delete:

                    }

                    // product
                    if (rtrim($pathinfo, '/') === '/admin/product') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_product;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'product');
                        }

                        return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ProductController::indexAction',  '_route' => 'product',);
                    }
                    not_product:

                    // product_show
                    if (preg_match('#^/admin/product/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_show')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ProductController::showAction',));
                    }

                    // product_new
                    if ($pathinfo === '/admin/product/new') {
                        return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ProductController::newAction',  '_route' => 'product_new',);
                    }

                    // product_create
                    if ($pathinfo === '/admin/product/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_product_create;
                        }

                        return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ProductController::createAction',  '_route' => 'product_create',);
                    }
                    not_product_create:

                    // product_edit
                    if (preg_match('#^/admin/product/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_edit')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ProductController::editAction',));
                    }

                    // product_update
                    if (preg_match('#^/admin/product/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_product_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_update')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ProductController::updateAction',));
                    }
                    not_product_update:

                    // product_delete
                    if (preg_match('#^/admin/product/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_product_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_delete')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ProductController::deleteAction',));
                    }
                    not_product_delete:

                }

            }

            if (0 === strpos($pathinfo, '/admin/noticecategory')) {
                // noticecategory
                if (rtrim($pathinfo, '/') === '/admin/noticecategory') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_noticecategory;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'noticecategory');
                    }

                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\NoticeCategoryController::indexAction',  '_route' => 'noticecategory',);
                }
                not_noticecategory:

                // noticecategory_show
                if (preg_match('#^/admin/noticecategory/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticecategory_show')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\NoticeCategoryController::showAction',));
                }

                // noticecategory_new
                if ($pathinfo === '/admin/noticecategory/new') {
                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\NoticeCategoryController::newAction',  '_route' => 'noticecategory_new',);
                }

                // noticecategory_create
                if ($pathinfo === '/admin/noticecategory/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_noticecategory_create;
                    }

                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\NoticeCategoryController::createAction',  '_route' => 'noticecategory_create',);
                }
                not_noticecategory_create:

                // noticecategory_edit
                if (preg_match('#^/admin/noticecategory/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticecategory_edit')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\NoticeCategoryController::editAction',));
                }

                // noticecategory_update
                if (preg_match('#^/admin/noticecategory/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_noticecategory_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticecategory_update')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\NoticeCategoryController::updateAction',));
                }
                not_noticecategory_update:

                // noticecategory_delete
                if (preg_match('#^/admin/noticecategory/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_noticecategory_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticecategory_delete')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\NoticeCategoryController::deleteAction',));
                }
                not_noticecategory_delete:

            }

            if (0 === strpos($pathinfo, '/admin/service')) {
                // service
                if (rtrim($pathinfo, '/') === '/admin/service') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_service;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'service');
                    }

                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ServiceController::indexAction',  '_route' => 'service',);
                }
                not_service:

                // service_show
                if (preg_match('#^/admin/service/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_show')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ServiceController::showAction',));
                }

                // service_new
                if ($pathinfo === '/admin/service/new') {
                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ServiceController::newAction',  '_route' => 'service_new',);
                }

                // service_create
                if ($pathinfo === '/admin/service/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_service_create;
                    }

                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ServiceController::createAction',  '_route' => 'service_create',);
                }
                not_service_create:

                // service_edit
                if (preg_match('#^/admin/service/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_edit')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ServiceController::editAction',));
                }

                // service_update
                if (preg_match('#^/admin/service/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_service_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_update')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ServiceController::updateAction',));
                }
                not_service_update:

                // service_delete
                if (preg_match('#^/admin/service/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_service_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_delete')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ServiceController::deleteAction',));
                }
                not_service_delete:

            }

            if (0 === strpos($pathinfo, '/admin/frontpage')) {
                // frontpage
                if (rtrim($pathinfo, '/') === '/admin/frontpage') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_frontpage;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'frontpage');
                    }

                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\FrontpageController::indexAction',  '_route' => 'frontpage',);
                }
                not_frontpage:

                // frontpage_show
                if (preg_match('#^/admin/frontpage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'frontpage_show')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\FrontpageController::showAction',));
                }

                // frontpage_new
                if ($pathinfo === '/admin/frontpage/new') {
                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\FrontpageController::newAction',  '_route' => 'frontpage_new',);
                }

                // frontpage_create
                if ($pathinfo === '/admin/frontpage/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_frontpage_create;
                    }

                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\FrontpageController::createAction',  '_route' => 'frontpage_create',);
                }
                not_frontpage_create:

                // frontpage_edit
                if (preg_match('#^/admin/frontpage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'frontpage_edit')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\FrontpageController::editAction',));
                }

                // frontpage_update
                if (preg_match('#^/admin/frontpage/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_frontpage_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'frontpage_update')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\FrontpageController::updateAction',));
                }
                not_frontpage_update:

                // frontpage_delete
                if (preg_match('#^/admin/frontpage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_frontpage_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'frontpage_delete')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\FrontpageController::deleteAction',));
                }
                not_frontpage_delete:

            }

            if (0 === strpos($pathinfo, '/admin/notice')) {
                // notice
                if (rtrim($pathinfo, '/') === '/admin/notice') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_notice;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'notice');
                    }

                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\NoticeController::indexAction',  '_route' => 'notice',);
                }
                not_notice:

                // notice_show
                if (preg_match('#^/admin/notice/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notice_show')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\NoticeController::showAction',));
                }

                // notice_new
                if ($pathinfo === '/admin/notice/new') {
                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\NoticeController::newAction',  '_route' => 'notice_new',);
                }

                // notice_create
                if ($pathinfo === '/admin/notice/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_notice_create;
                    }

                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\NoticeController::createAction',  '_route' => 'notice_create',);
                }
                not_notice_create:

                // notice_edit
                if (preg_match('#^/admin/notice/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notice_edit')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\NoticeController::editAction',));
                }

                // notice_update
                if (preg_match('#^/admin/notice/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_notice_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notice_update')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\NoticeController::updateAction',));
                }
                not_notice_update:

                // notice_delete
                if (preg_match('#^/admin/notice/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_notice_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notice_delete')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\NoticeController::deleteAction',));
                }
                not_notice_delete:

            }

            if (0 === strpos($pathinfo, '/admin/history')) {
                // history
                if (rtrim($pathinfo, '/') === '/admin/history') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_history;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'history');
                    }

                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\HistoryController::indexAction',  '_route' => 'history',);
                }
                not_history:

                // history_show
                if (preg_match('#^/admin/history/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'history_show')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\HistoryController::showAction',));
                }

                // history_new
                if ($pathinfo === '/admin/history/new') {
                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\HistoryController::newAction',  '_route' => 'history_new',);
                }

                // history_create
                if ($pathinfo === '/admin/history/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_history_create;
                    }

                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\HistoryController::createAction',  '_route' => 'history_create',);
                }
                not_history_create:

                // history_edit
                if (preg_match('#^/admin/history/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'history_edit')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\HistoryController::editAction',));
                }

                // history_update
                if (preg_match('#^/admin/history/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_history_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'history_update')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\HistoryController::updateAction',));
                }
                not_history_update:

                // history_delete
                if (preg_match('#^/admin/history/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_history_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'history_delete')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\HistoryController::deleteAction',));
                }
                not_history_delete:

            }

            if (0 === strpos($pathinfo, '/admin/report')) {
                // report
                if (rtrim($pathinfo, '/') === '/admin/report') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_report;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'report');
                    }

                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ReportController::indexAction',  '_route' => 'report',);
                }
                not_report:

                // report_show
                if (preg_match('#^/admin/report/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'report_show')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ReportController::showAction',));
                }

                // report_new
                if ($pathinfo === '/admin/report/new') {
                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ReportController::newAction',  '_route' => 'report_new',);
                }

                // report_create
                if ($pathinfo === '/admin/report/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_report_create;
                    }

                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ReportController::createAction',  '_route' => 'report_create',);
                }
                not_report_create:

                // report_edit
                if (preg_match('#^/admin/report/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'report_edit')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ReportController::editAction',));
                }

                // report_update
                if (preg_match('#^/admin/report/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_report_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'report_update')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ReportController::updateAction',));
                }
                not_report_update:

                // report_delete
                if (preg_match('#^/admin/report/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_report_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'report_delete')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\ReportController::deleteAction',));
                }
                not_report_delete:

            }

            if (0 === strpos($pathinfo, '/admin/member')) {
                if (0 === strpos($pathinfo, '/admin/memberrole')) {
                    // memberrole
                    if (rtrim($pathinfo, '/') === '/admin/memberrole') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_memberrole;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'memberrole');
                        }

                        return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\MemberRoleController::indexAction',  '_route' => 'memberrole',);
                    }
                    not_memberrole:

                    // memberrole_show
                    if (preg_match('#^/admin/memberrole/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'memberrole_show')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\MemberRoleController::showAction',));
                    }

                    // memberrole_new
                    if ($pathinfo === '/admin/memberrole/new') {
                        return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\MemberRoleController::newAction',  '_route' => 'memberrole_new',);
                    }

                    // memberrole_create
                    if ($pathinfo === '/admin/memberrole/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_memberrole_create;
                        }

                        return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\MemberRoleController::createAction',  '_route' => 'memberrole_create',);
                    }
                    not_memberrole_create:

                    // memberrole_edit
                    if (preg_match('#^/admin/memberrole/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'memberrole_edit')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\MemberRoleController::editAction',));
                    }

                    // memberrole_update
                    if (preg_match('#^/admin/memberrole/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_memberrole_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'memberrole_update')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\MemberRoleController::updateAction',));
                    }
                    not_memberrole_update:

                    // memberrole_delete
                    if (preg_match('#^/admin/memberrole/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_memberrole_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'memberrole_delete')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\MemberRoleController::deleteAction',));
                    }
                    not_memberrole_delete:

                }

                // member
                if (rtrim($pathinfo, '/') === '/admin/member') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_member;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'member');
                    }

                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\MemberController::indexAction',  '_route' => 'member',);
                }
                not_member:

                // member_show
                if (preg_match('#^/admin/member/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'member_show')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\MemberController::showAction',));
                }

                // member_new
                if ($pathinfo === '/admin/member/new') {
                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\MemberController::newAction',  '_route' => 'member_new',);
                }

                // member_create
                if ($pathinfo === '/admin/member/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_member_create;
                    }

                    return array (  '_controller' => 'Uni\\AdminBundle\\Controller\\MemberController::createAction',  '_route' => 'member_create',);
                }
                not_member_create:

                // member_edit
                if (preg_match('#^/admin/member/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'member_edit')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\MemberController::editAction',));
                }

                // member_update
                if (preg_match('#^/admin/member/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_member_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'member_update')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\MemberController::updateAction',));
                }
                not_member_update:

                // member_delete
                if (preg_match('#^/admin/member/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_member_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'member_delete')), array (  '_controller' => 'Uni\\AdminBundle\\Controller\\MemberController::deleteAction',));
                }
                not_member_delete:

            }

            // uni_admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'uni_admin');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction',  'path' => '/admin/dashboard',  'permanent' => true,  '_route' => 'uni_admin',);
            }

        }

        // uni_page
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'uni_page');
            }

            return array (  '_controller' => 'Uni\\PageBundle\\Controller\\PageController::indexAction',  '_route' => 'uni_page',);
        }

        // uni_page_member
        if ($pathinfo === '/member') {
            return array (  '_controller' => 'Uni\\PageBundle\\Controller\\PageController::memberAction',  '_route' => 'uni_page_member',);
        }

        // uni_page_history
        if ($pathinfo === '/history') {
            return array (  '_controller' => 'Uni\\PageBundle\\Controller\\PageController::historyAction',  '_route' => 'uni_page_history',);
        }

        // uni_page_process
        if ($pathinfo === '/process') {
            return array (  '_controller' => 'Uni\\PageBundle\\Controller\\PageController::processAction',  '_route' => 'uni_page_process',);
        }

        // uni_page_notice
        if ($pathinfo === '/notice') {
            return array (  '_controller' => 'Uni\\PageBundle\\Controller\\PageController::noticeAction',  '_route' => 'uni_page_notice',);
        }

        // uni_page_camera
        if ($pathinfo === '/camera') {
            return array (  '_controller' => 'Uni\\PageBundle\\Controller\\PageController::cameraAction',  '_route' => 'uni_page_camera',);
        }

        // uni_page_notice_show
        if (preg_match('#^/(?P<id>[^/]++)/noticeshow$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'uni_page_notice_show')), array (  '_controller' => 'Uni\\PageBundle\\Controller\\PageController::noticeshowAction',));
        }

        // uni_page_report
        if ($pathinfo === '/report') {
            return array (  '_controller' => 'Uni\\PageBundle\\Controller\\PageController::reportAction',  '_route' => 'uni_page_report',);
        }

        // uni_page_report_show
        if (preg_match('#^/(?P<id>[^/]++)/reportshow$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'uni_page_report_show')), array (  '_controller' => 'Uni\\PageBundle\\Controller\\PageController::reportshowAction',));
        }

        // uni_page_document
        if ($pathinfo === '/document') {
            return array (  '_controller' => 'Uni\\PageBundle\\Controller\\PageController::documentAction',  '_route' => 'uni_page_document',);
        }

        // uni_page_document_show
        if (preg_match('#^/(?P<id>[^/]++)/documentshow$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'uni_page_document_show')), array (  '_controller' => 'Uni\\PageBundle\\Controller\\PageController::documentshowAction',));
        }

        // uni_page_publication
        if ($pathinfo === '/publication') {
            return array (  '_controller' => 'Uni\\PageBundle\\Controller\\PageController::publicationAction',  '_route' => 'uni_page_publication',);
        }

        // uni_page_gallery
        if ($pathinfo === '/gallery') {
            return array (  '_controller' => 'Uni\\PageBundle\\Controller\\PageController::galleryAction',  '_route' => 'uni_page_gallery',);
        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_resetting_request;
                }

                return array (  '_controller' => 'Uni\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'user_resetting_request',);
            }
            not_user_resetting_request:

            // user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_resetting_send_email;
                }

                return array (  '_controller' => 'Uni\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'user_resetting_send_email',);
            }
            not_user_resetting_send_email:

            // user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_resetting_check_email;
                }

                return array (  '_controller' => 'Uni\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'user_resetting_check_email',);
            }
            not_user_resetting_check_email:

            // user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_resetting_reset')), array (  '_controller' => 'Uni\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_user_resetting_reset:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Uni\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'user_security_login',);
                }

                // user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_user_security_check;
                    }

                    return array (  '_controller' => 'Uni\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'user_security_check',);
                }
                not_user_security_check:

            }

            // user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Uni\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
