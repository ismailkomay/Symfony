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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/d0cd489')) {
            // _assetic_d0cd489
            if ($pathinfo === '/css/d0cd489.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd0cd489',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_d0cd489',);
            }

            if (0 === strpos($pathinfo, '/css/d0cd489_part_1_')) {
                if (0 === strpos($pathinfo, '/css/d0cd489_part_1_bootstrap')) {
                    if (0 === strpos($pathinfo, '/css/d0cd489_part_1_bootstrap-theme')) {
                        // _assetic_d0cd489_0
                        if ($pathinfo === '/css/d0cd489_part_1_bootstrap-theme_1.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd0cd489',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_d0cd489_0',);
                        }

                        if (0 === strpos($pathinfo, '/css/d0cd489_part_1_bootstrap-theme.')) {
                            // _assetic_d0cd489_1
                            if ($pathinfo === '/css/d0cd489_part_1_bootstrap-theme.css_2.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd0cd489',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_d0cd489_1',);
                            }

                            // _assetic_d0cd489_2
                            if ($pathinfo === '/css/d0cd489_part_1_bootstrap-theme.min_3.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd0cd489',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_d0cd489_2',);
                            }

                        }

                    }

                    // _assetic_d0cd489_3
                    if ($pathinfo === '/css/d0cd489_part_1_bootstrap_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd0cd489',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_d0cd489_3',);
                    }

                    if (0 === strpos($pathinfo, '/css/d0cd489_part_1_bootstrap.')) {
                        // _assetic_d0cd489_4
                        if ($pathinfo === '/css/d0cd489_part_1_bootstrap.css_5.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd0cd489',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_d0cd489_4',);
                        }

                        // _assetic_d0cd489_5
                        if ($pathinfo === '/css/d0cd489_part_1_bootstrap.min_6.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd0cd489',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_d0cd489_5',);
                        }

                    }

                }

                // _assetic_d0cd489_6
                if ($pathinfo === '/css/d0cd489_part_1_jquery.datetimepicker_7.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd0cd489',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_d0cd489_6',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/b262d73')) {
            // _assetic_b262d73
            if ($pathinfo === '/js/b262d73.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b262d73',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_b262d73',);
            }

            if (0 === strpos($pathinfo, '/js/b262d73_part_1_')) {
                // _assetic_b262d73_0
                if ($pathinfo === '/js/b262d73_part_1_ajax1_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b262d73',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_b262d73_0',);
                }

                if (0 === strpos($pathinfo, '/js/b262d73_part_1_bootstrap')) {
                    // _assetic_b262d73_1
                    if ($pathinfo === '/js/b262d73_part_1_bootstrap_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b262d73',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_b262d73_1',);
                    }

                    // _assetic_b262d73_2
                    if ($pathinfo === '/js/b262d73_part_1_bootstrap.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b262d73',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_b262d73_2',);
                    }

                }

                if (0 === strpos($pathinfo, '/js/b262d73_part_1_jquery')) {
                    // _assetic_b262d73_3
                    if ($pathinfo === '/js/b262d73_part_1_jquery-2.1.3.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b262d73',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_b262d73_3',);
                    }

                    // _assetic_b262d73_4
                    if ($pathinfo === '/js/b262d73_part_1_jquery.datetimepicker_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b262d73',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_b262d73_4',);
                    }

                    // _assetic_b262d73_5
                    if ($pathinfo === '/js/b262d73_part_1_jquery1_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b262d73',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_b262d73_5',);
                    }

                }

                // _assetic_b262d73_6
                if ($pathinfo === '/js/b262d73_part_1_npm_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b262d73',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_b262d73_6',);
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

        if (0 === strpos($pathinfo, '/typeprestation')) {
            // typeprestation
            if (rtrim($pathinfo, '/') === '/typeprestation') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'typeprestation');
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypePrestationController::indexAction',  '_route' => 'typeprestation',);
            }

            // typeprestation_show
            if (preg_match('#^/typeprestation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeprestation_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypePrestationController::showAction',));
            }

            // typeprestation_new
            if ($pathinfo === '/typeprestation/new') {
                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypePrestationController::newAction',  '_route' => 'typeprestation_new',);
            }

            // typeprestation_create
            if ($pathinfo === '/typeprestation/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_typeprestation_create;
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypePrestationController::createAction',  '_route' => 'typeprestation_create',);
            }
            not_typeprestation_create:

            // typeprestation_edit
            if (preg_match('#^/typeprestation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeprestation_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypePrestationController::editAction',));
            }

            // typeprestation_update
            if (preg_match('#^/typeprestation/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_typeprestation_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeprestation_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypePrestationController::updateAction',));
            }
            not_typeprestation_update:

            // typeprestation_delete
            if (preg_match('#^/typeprestation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_typeprestation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeprestation_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypePrestationController::deleteAction',));
            }
            not_typeprestation_delete:

        }

        if (0 === strpos($pathinfo, '/secteur')) {
            // secteur
            if (rtrim($pathinfo, '/') === '/secteur') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'secteur');
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\SecteurController::indexAction',  '_route' => 'secteur',);
            }

            // secteur_show
            if (preg_match('#^/secteur/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'secteur_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\SecteurController::showAction',));
            }

            // secteur_new
            if ($pathinfo === '/secteur/new') {
                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\SecteurController::newAction',  '_route' => 'secteur_new',);
            }

            // secteur_create
            if ($pathinfo === '/secteur/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_secteur_create;
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\SecteurController::createAction',  '_route' => 'secteur_create',);
            }
            not_secteur_create:

            // secteur_edit
            if (preg_match('#^/secteur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'secteur_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\SecteurController::editAction',));
            }

            // secteur_update
            if (preg_match('#^/secteur/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_secteur_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'secteur_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\SecteurController::updateAction',));
            }
            not_secteur_update:

            // secteur_delete
            if (preg_match('#^/secteur/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_secteur_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'secteur_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\SecteurController::deleteAction',));
            }
            not_secteur_delete:

        }

        if (0 === strpos($pathinfo, '/feuillederoute')) {
            // feuillederoute
            if (rtrim($pathinfo, '/') === '/feuillederoute') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'feuillederoute');
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FeuilleDeRouteController::indexAction',  '_route' => 'feuillederoute',);
            }

            // feuillederoute_show
            if (preg_match('#^/feuillederoute/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'feuillederoute_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FeuilleDeRouteController::showAction',));
            }

            // feuillederoute_new
            if ($pathinfo === '/feuillederoute/new') {
                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FeuilleDeRouteController::newAction',  '_route' => 'feuillederoute_new',);
            }

            // feuillederoute_create
            if ($pathinfo === '/feuillederoute/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_feuillederoute_create;
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FeuilleDeRouteController::createAction',  '_route' => 'feuillederoute_create',);
            }
            not_feuillederoute_create:

            // feuillederoute_edit
            if (preg_match('#^/feuillederoute/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'feuillederoute_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FeuilleDeRouteController::editAction',));
            }

            // feuillederoute_update
            if (preg_match('#^/feuillederoute/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_feuillederoute_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'feuillederoute_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FeuilleDeRouteController::updateAction',));
            }
            not_feuillederoute_update:

            // feuillederoute_delete
            if (preg_match('#^/feuillederoute/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_feuillederoute_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'feuillederoute_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FeuilleDeRouteController::deleteAction',));
            }
            not_feuillederoute_delete:

        }

        if (0 === strpos($pathinfo, '/vehicule')) {
            // vehicule
            if (rtrim($pathinfo, '/') === '/vehicule') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'vehicule');
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\VehiculeController::indexAction',  '_route' => 'vehicule',);
            }

            // vehicule_show
            if (preg_match('#^/vehicule/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vehicule_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\VehiculeController::showAction',));
            }

            // vehicule_new
            if ($pathinfo === '/vehicule/new') {
                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\VehiculeController::newAction',  '_route' => 'vehicule_new',);
            }

            // vehicule_create
            if ($pathinfo === '/vehicule/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_vehicule_create;
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\VehiculeController::createAction',  '_route' => 'vehicule_create',);
            }
            not_vehicule_create:

            // vehicule_edit
            if (preg_match('#^/vehicule/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vehicule_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\VehiculeController::editAction',));
            }

            // vehicule_update
            if (preg_match('#^/vehicule/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_vehicule_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vehicule_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\VehiculeController::updateAction',));
            }
            not_vehicule_update:

            // vehicule_delete
            if (preg_match('#^/vehicule/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_vehicule_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vehicule_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\VehiculeController::deleteAction',));
            }
            not_vehicule_delete:

        }

        if (0 === strpos($pathinfo, '/utilisateur')) {
            // utilisateur
            if (rtrim($pathinfo, '/') === '/utilisateur') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'utilisateur');
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\UtilisateurController::indexAction',  '_route' => 'utilisateur',);
            }

            // utilisateur_show
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\UtilisateurController::showAction',));
            }

            // utilisateur_new
            if ($pathinfo === '/utilisateur/new') {
                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\UtilisateurController::newAction',  '_route' => 'utilisateur_new',);
            }

            // utilisateur_create
            if ($pathinfo === '/utilisateur/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_utilisateur_create;
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\UtilisateurController::createAction',  '_route' => 'utilisateur_create',);
            }
            not_utilisateur_create:

            // utilisateur_edit
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\UtilisateurController::editAction',));
            }

            // utilisateur_update
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_utilisateur_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\UtilisateurController::updateAction',));
            }
            not_utilisateur_update:

            // utilisateur_delete
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_utilisateur_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\UtilisateurController::deleteAction',));
            }
            not_utilisateur_delete:

        }

        if (0 === strpos($pathinfo, '/boncarburanthuile')) {
            // boncarburanthuile
            if (rtrim($pathinfo, '/') === '/boncarburanthuile') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'boncarburanthuile');
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\BonCarburantHuileController::indexAction',  '_route' => 'boncarburanthuile',);
            }

            // boncarburanthuile_show
            if (preg_match('#^/boncarburanthuile/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'boncarburanthuile_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\BonCarburantHuileController::showAction',));
            }

            // boncarburanthuile_new
            if ($pathinfo === '/boncarburanthuile/new') {
                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\BonCarburantHuileController::newAction',  '_route' => 'boncarburanthuile_new',);
            }

            // boncarburanthuile_create
            if ($pathinfo === '/boncarburanthuile/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_boncarburanthuile_create;
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\BonCarburantHuileController::createAction',  '_route' => 'boncarburanthuile_create',);
            }
            not_boncarburanthuile_create:

            // boncarburanthuile_edit
            if (preg_match('#^/boncarburanthuile/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'boncarburanthuile_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\BonCarburantHuileController::editAction',));
            }

            // boncarburanthuile_update
            if (preg_match('#^/boncarburanthuile/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_boncarburanthuile_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'boncarburanthuile_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\BonCarburantHuileController::updateAction',));
            }
            not_boncarburanthuile_update:

            // boncarburanthuile_delete
            if (preg_match('#^/boncarburanthuile/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_boncarburanthuile_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'boncarburanthuile_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\BonCarburantHuileController::deleteAction',));
            }
            not_boncarburanthuile_delete:

        }

        if (0 === strpos($pathinfo, '/typeconsommation')) {
            // typeconsommation
            if (rtrim($pathinfo, '/') === '/typeconsommation') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'typeconsommation');
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypeConsommationController::indexAction',  '_route' => 'typeconsommation',);
            }

            // typeconsommation_show
            if (preg_match('#^/typeconsommation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeconsommation_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypeConsommationController::showAction',));
            }

            // typeconsommation_new
            if ($pathinfo === '/typeconsommation/new') {
                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypeConsommationController::newAction',  '_route' => 'typeconsommation_new',);
            }

            // typeconsommation_create
            if ($pathinfo === '/typeconsommation/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_typeconsommation_create;
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypeConsommationController::createAction',  '_route' => 'typeconsommation_create',);
            }
            not_typeconsommation_create:

            // typeconsommation_edit
            if (preg_match('#^/typeconsommation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeconsommation_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypeConsommationController::editAction',));
            }

            // typeconsommation_update
            if (preg_match('#^/typeconsommation/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_typeconsommation_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeconsommation_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypeConsommationController::updateAction',));
            }
            not_typeconsommation_update:

            // typeconsommation_delete
            if (preg_match('#^/typeconsommation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_typeconsommation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeconsommation_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypeConsommationController::deleteAction',));
            }
            not_typeconsommation_delete:

        }

        if (0 === strpos($pathinfo, '/role')) {
            // role
            if (rtrim($pathinfo, '/') === '/role') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'role');
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\RoleController::indexAction',  '_route' => 'role',);
            }

            // role_show
            if (preg_match('#^/role/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\RoleController::showAction',));
            }

            // role_new
            if ($pathinfo === '/role/new') {
                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\RoleController::newAction',  '_route' => 'role_new',);
            }

            // role_create
            if ($pathinfo === '/role/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_role_create;
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\RoleController::createAction',  '_route' => 'role_create',);
            }
            not_role_create:

            // role_edit
            if (preg_match('#^/role/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\RoleController::editAction',));
            }

            // role_update
            if (preg_match('#^/role/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_role_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\RoleController::updateAction',));
            }
            not_role_update:

            // role_delete
            if (preg_match('#^/role/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_role_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\RoleController::deleteAction',));
            }
            not_role_delete:

        }

        if (0 === strpos($pathinfo, '/peage')) {
            // peage
            if (rtrim($pathinfo, '/') === '/peage') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'peage');
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\PeageController::indexAction',  '_route' => 'peage',);
            }

            // peage_show
            if (preg_match('#^/peage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'peage_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\PeageController::showAction',));
            }

            // peage_new
            if ($pathinfo === '/peage/new') {
                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\PeageController::newAction',  '_route' => 'peage_new',);
            }

            // peage_create
            if ($pathinfo === '/peage/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_peage_create;
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\PeageController::createAction',  '_route' => 'peage_create',);
            }
            not_peage_create:

            // peage_edit
            if (preg_match('#^/peage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'peage_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\PeageController::editAction',));
            }

            // peage_update
            if (preg_match('#^/peage/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_peage_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'peage_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\PeageController::updateAction',));
            }
            not_peage_update:

            // peage_delete
            if (preg_match('#^/peage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_peage_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'peage_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\PeageController::deleteAction',));
            }
            not_peage_delete:

        }

        if (0 === strpos($pathinfo, '/m')) {
            if (0 === strpos($pathinfo, '/modification')) {
                // modification
                if (rtrim($pathinfo, '/') === '/modification') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'modification');
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ModificationController::indexAction',  '_route' => 'modification',);
                }

                // modification_show
                if (preg_match('#^/modification/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modification_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ModificationController::showAction',));
                }

                // modification_new
                if ($pathinfo === '/modification/new') {
                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ModificationController::newAction',  '_route' => 'modification_new',);
                }

                // modification_create
                if ($pathinfo === '/modification/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_modification_create;
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ModificationController::createAction',  '_route' => 'modification_create',);
                }
                not_modification_create:

                // modification_edit
                if (preg_match('#^/modification/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modification_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ModificationController::editAction',));
                }

                // modification_update
                if (preg_match('#^/modification/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_modification_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modification_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ModificationController::updateAction',));
                }
                not_modification_update:

                // modification_delete
                if (preg_match('#^/modification/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_modification_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modification_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ModificationController::deleteAction',));
                }
                not_modification_delete:

            }

            if (0 === strpos($pathinfo, '/missionaffretement')) {
                // missionaffretement
                if (rtrim($pathinfo, '/') === '/missionaffretement') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'missionaffretement');
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\MissionAffretementController::indexAction',  '_route' => 'missionaffretement',);
                }

                // missionaffretement_show
                if (preg_match('#^/missionaffretement/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'missionaffretement_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\MissionAffretementController::showAction',));
                }

                // missionaffretement_new
                if ($pathinfo === '/missionaffretement/new') {
                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\MissionAffretementController::newAction',  '_route' => 'missionaffretement_new',);
                }

                // missionaffretement_create
                if ($pathinfo === '/missionaffretement/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_missionaffretement_create;
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\MissionAffretementController::createAction',  '_route' => 'missionaffretement_create',);
                }
                not_missionaffretement_create:

                // missionaffretement_edit
                if (preg_match('#^/missionaffretement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'missionaffretement_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\MissionAffretementController::editAction',));
                }

                // missionaffretement_update
                if (preg_match('#^/missionaffretement/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_missionaffretement_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'missionaffretement_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\MissionAffretementController::updateAction',));
                }
                not_missionaffretement_update:

                // missionaffretement_delete
                if (preg_match('#^/missionaffretement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_missionaffretement_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'missionaffretement_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\MissionAffretementController::deleteAction',));
                }
                not_missionaffretement_delete:

            }

            if (0 === strpos($pathinfo, '/manutentionnaire')) {
                // manutentionnaire
                if (rtrim($pathinfo, '/') === '/manutentionnaire') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'manutentionnaire');
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ManutentionnaireController::indexAction',  '_route' => 'manutentionnaire',);
                }

                // manutentionnaire_show
                if (preg_match('#^/manutentionnaire/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'manutentionnaire_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ManutentionnaireController::showAction',));
                }

                // manutentionnaire_new
                if ($pathinfo === '/manutentionnaire/new') {
                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ManutentionnaireController::newAction',  '_route' => 'manutentionnaire_new',);
                }

                // manutentionnaire_create
                if ($pathinfo === '/manutentionnaire/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_manutentionnaire_create;
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ManutentionnaireController::createAction',  '_route' => 'manutentionnaire_create',);
                }
                not_manutentionnaire_create:

                // manutentionnaire_edit
                if (preg_match('#^/manutentionnaire/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'manutentionnaire_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ManutentionnaireController::editAction',));
                }

                // manutentionnaire_update
                if (preg_match('#^/manutentionnaire/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_manutentionnaire_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'manutentionnaire_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ManutentionnaireController::updateAction',));
                }
                not_manutentionnaire_update:

                // manutentionnaire_delete
                if (preg_match('#^/manutentionnaire/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_manutentionnaire_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'manutentionnaire_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ManutentionnaireController::deleteAction',));
                }
                not_manutentionnaire_delete:

            }

        }

        if (0 === strpos($pathinfo, '/i')) {
            if (0 === strpos($pathinfo, '/itineraire')) {
                // itineraire
                if (rtrim($pathinfo, '/') === '/itineraire') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'itineraire');
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ItineraireController::indexAction',  '_route' => 'itineraire',);
                }

                // itineraire_show
                if (preg_match('#^/itineraire/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'itineraire_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ItineraireController::showAction',));
                }

                // itineraire_new
                if ($pathinfo === '/itineraire/new') {
                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ItineraireController::newAction',  '_route' => 'itineraire_new',);
                }

                // itineraire_create
                if ($pathinfo === '/itineraire/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_itineraire_create;
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ItineraireController::createAction',  '_route' => 'itineraire_create',);
                }
                not_itineraire_create:

                // itineraire_edit
                if (preg_match('#^/itineraire/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'itineraire_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ItineraireController::editAction',));
                }

                // itineraire_update
                if (preg_match('#^/itineraire/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_itineraire_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'itineraire_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ItineraireController::updateAction',));
                }
                not_itineraire_update:

                // itineraire_delete
                if (preg_match('#^/itineraire/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_itineraire_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'itineraire_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ItineraireController::deleteAction',));
                }
                not_itineraire_delete:

            }

            if (0 === strpos($pathinfo, '/indisponibilite')) {
                // indisponibilite
                if (rtrim($pathinfo, '/') === '/indisponibilite') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'indisponibilite');
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\IndisponibiliteController::indexAction',  '_route' => 'indisponibilite',);
                }

                // indisponibilite_show
                if (preg_match('#^/indisponibilite/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'indisponibilite_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\IndisponibiliteController::showAction',));
                }

                // indisponibilite_new
                if ($pathinfo === '/indisponibilite/new') {
                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\IndisponibiliteController::newAction',  '_route' => 'indisponibilite_new',);
                }

                // indisponibilite_create
                if ($pathinfo === '/indisponibilite/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_indisponibilite_create;
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\IndisponibiliteController::createAction',  '_route' => 'indisponibilite_create',);
                }
                not_indisponibilite_create:

                // indisponibilite_edit
                if (preg_match('#^/indisponibilite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'indisponibilite_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\IndisponibiliteController::editAction',));
                }

                // indisponibilite_update
                if (preg_match('#^/indisponibilite/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_indisponibilite_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'indisponibilite_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\IndisponibiliteController::updateAction',));
                }
                not_indisponibilite_update:

                // indisponibilite_delete
                if (preg_match('#^/indisponibilite/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_indisponibilite_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'indisponibilite_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\IndisponibiliteController::deleteAction',));
                }
                not_indisponibilite_delete:

            }

        }

        if (0 === strpos($pathinfo, '/filiale')) {
            // filiale
            if (rtrim($pathinfo, '/') === '/filiale') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'filiale');
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FilialeController::indexAction',  '_route' => 'filiale',);
            }

            // filiale_show
            if (preg_match('#^/filiale/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'filiale_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FilialeController::showAction',));
            }

            // filiale_new
            if ($pathinfo === '/filiale/new') {
                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FilialeController::newAction',  '_route' => 'filiale_new',);
            }

            // filiale_create
            if ($pathinfo === '/filiale/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_filiale_create;
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FilialeController::createAction',  '_route' => 'filiale_create',);
            }
            not_filiale_create:

            // filiale_edit
            if (preg_match('#^/filiale/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'filiale_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FilialeController::editAction',));
            }

            // filiale_update
            if (preg_match('#^/filiale/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_filiale_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'filiale_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FilialeController::updateAction',));
            }
            not_filiale_update:

            // filiale_delete
            if (preg_match('#^/filiale/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_filiale_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'filiale_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FilialeController::deleteAction',));
            }
            not_filiale_delete:

        }

        if (0 === strpos($pathinfo, '/depot')) {
            // depot
            if (rtrim($pathinfo, '/') === '/depot') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'depot');
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\DepotController::indexAction',  '_route' => 'depot',);
            }

            // depot_show
            if (preg_match('#^/depot/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'depot_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\DepotController::showAction',));
            }

            // depot_new
            if ($pathinfo === '/depot/new') {
                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\DepotController::newAction',  '_route' => 'depot_new',);
            }

            // depot_create
            if ($pathinfo === '/depot/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_depot_create;
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\DepotController::createAction',  '_route' => 'depot_create',);
            }
            not_depot_create:

            // depot_edit
            if (preg_match('#^/depot/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'depot_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\DepotController::editAction',));
            }

            // depot_update
            if (preg_match('#^/depot/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_depot_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'depot_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\DepotController::updateAction',));
            }
            not_depot_update:

            // depot_delete
            if (preg_match('#^/depot/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_depot_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'depot_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\DepotController::deleteAction',));
            }
            not_depot_delete:

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/client')) {
                if (0 === strpos($pathinfo, '/clientfdr')) {
                    if (0 === strpos($pathinfo, '/clientfdrv')) {
                        // clientfdrv
                        if (rtrim($pathinfo, '/') === '/clientfdrv') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'clientfdrv');
                            }

                            return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientFdrVController::indexAction',  '_route' => 'clientfdrv',);
                        }

                        // clientfdrv_show
                        if (preg_match('#^/clientfdrv/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'clientfdrv_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientFdrVController::showAction',));
                        }

                        // clientfdrv_new
                        if ($pathinfo === '/clientfdrv/new') {
                            return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientFdrVController::newAction',  '_route' => 'clientfdrv_new',);
                        }

                        // clientfdrv_create
                        if ($pathinfo === '/clientfdrv/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_clientfdrv_create;
                            }

                            return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientFdrVController::createAction',  '_route' => 'clientfdrv_create',);
                        }
                        not_clientfdrv_create:

                        // clientfdrv_edit
                        if (preg_match('#^/clientfdrv/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'clientfdrv_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientFdrVController::editAction',));
                        }

                        // clientfdrv_update
                        if (preg_match('#^/clientfdrv/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_clientfdrv_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'clientfdrv_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientFdrVController::updateAction',));
                        }
                        not_clientfdrv_update:

                        // clientfdrv_delete
                        if (preg_match('#^/clientfdrv/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_clientfdrv_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'clientfdrv_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientFdrVController::deleteAction',));
                        }
                        not_clientfdrv_delete:

                    }

                    if (0 === strpos($pathinfo, '/clientfdrf')) {
                        // clientfdrf
                        if (rtrim($pathinfo, '/') === '/clientfdrf') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'clientfdrf');
                            }

                            return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientFdrFController::indexAction',  '_route' => 'clientfdrf',);
                        }

                        // clientfdrf_show
                        if (preg_match('#^/clientfdrf/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'clientfdrf_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientFdrFController::showAction',));
                        }

                        // clientfdrf_new
                        if ($pathinfo === '/clientfdrf/new') {
                            return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientFdrFController::newAction',  '_route' => 'clientfdrf_new',);
                        }

                        // clientfdrf_create
                        if ($pathinfo === '/clientfdrf/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_clientfdrf_create;
                            }

                            return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientFdrFController::createAction',  '_route' => 'clientfdrf_create',);
                        }
                        not_clientfdrf_create:

                        // clientfdrf_edit
                        if (preg_match('#^/clientfdrf/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'clientfdrf_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientFdrFController::editAction',));
                        }

                        // clientfdrf_update
                        if (preg_match('#^/clientfdrf/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_clientfdrf_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'clientfdrf_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientFdrFController::updateAction',));
                        }
                        not_clientfdrf_update:

                        // clientfdrf_delete
                        if (preg_match('#^/clientfdrf/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_clientfdrf_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'clientfdrf_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientFdrFController::deleteAction',));
                        }
                        not_clientfdrf_delete:

                    }

                }

                // client
                if (rtrim($pathinfo, '/') === '/client') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'client');
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientController::indexAction',  '_route' => 'client',);
                }

                // client_show
                if (preg_match('#^/client/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientController::showAction',));
                }

                // client_new
                if ($pathinfo === '/client/new') {
                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientController::newAction',  '_route' => 'client_new',);
                }

                // client_create
                if ($pathinfo === '/client/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_client_create;
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientController::createAction',  '_route' => 'client_create',);
                }
                not_client_create:

                // client_edit
                if (preg_match('#^/client/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientController::editAction',));
                }

                // client_update
                if (preg_match('#^/client/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_client_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientController::updateAction',));
                }
                not_client_update:

                // client_delete
                if (preg_match('#^/client/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_client_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientController::deleteAction',));
                }
                not_client_delete:

            }

            if (0 === strpos($pathinfo, '/chauffeur')) {
                // chauffeur
                if (rtrim($pathinfo, '/') === '/chauffeur') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'chauffeur');
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ChauffeurController::indexAction',  '_route' => 'chauffeur',);
                }

                // chauffeur_show
                if (preg_match('#^/chauffeur/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chauffeur_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ChauffeurController::showAction',));
                }

                // chauffeur_new
                if ($pathinfo === '/chauffeur/new') {
                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ChauffeurController::newAction',  '_route' => 'chauffeur_new',);
                }

                // chauffeur_create
                if ($pathinfo === '/chauffeur/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_chauffeur_create;
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ChauffeurController::createAction',  '_route' => 'chauffeur_create',);
                }
                not_chauffeur_create:

                // chauffeur_edit
                if (preg_match('#^/chauffeur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chauffeur_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ChauffeurController::editAction',));
                }

                // chauffeur_update
                if (preg_match('#^/chauffeur/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_chauffeur_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chauffeur_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ChauffeurController::updateAction',));
                }
                not_chauffeur_update:

                // chauffeur_delete
                if (preg_match('#^/chauffeur/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_chauffeur_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chauffeur_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ChauffeurController::deleteAction',));
                }
                not_chauffeur_delete:

            }

        }

        // fdr_admin_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fdr_admin_homepage')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/test')) {
            // test
            if ($pathinfo === '/test') {
                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\DefaultController::testAction',  '_route' => 'test',);
            }

            // testrep
            if ($pathinfo === '/testrep') {
                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\DefaultController::testrepAction',  '_route' => 'testrep',);
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // homepage
            if ($pathinfo === '/app/example') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            }

            // my_very_secret_route
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\DefaultController::indexAction',  'name' => 1,  '_route' => 'my_very_secret_route',);
            }

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
