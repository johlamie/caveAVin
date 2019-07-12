<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/Bouteille')) {
            // acceuil
            if ('/Bouteille' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\BouteilleController::bouteilleAction',  '_route' => 'acceuil',);
            }

            // bouteilleID
            if (preg_match('#^/Bouteille/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'bouteilleID']), array (  '_controller' => 'AppBundle\\Controller\\BouteilleController::bouteilleIdAction',));
            }

            // app_bouteille_bouteilleidmill
            if (preg_match('#^/Bouteille/(?P<id>[^/]++)/(?P<millesime>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_bouteille_bouteilleidmill']), array (  '_controller' => 'AppBundle\\Controller\\BouteilleController::bouteilleIdMillAction',));
            }

            // insertBouteille
            if ('/Bouteille/insert' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\BouteilleController::bouteilleInsertAction',  '_route' => 'insertBouteille',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_insertBouteille;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'insertBouteille'));
                }

                return $ret;
            }
            not_insertBouteille:

            // updateBouteille
            if (0 === strpos($pathinfo, '/Bouteille/update') && preg_match('#^/Bouteille/update/(?P<id>[^/]++)/(?P<millesime>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'updateBouteille']), array (  '_controller' => 'AppBundle\\Controller\\BouteilleController::bouteilleUpdateAction',));
            }

            // deleteBouteille
            if (0 === strpos($pathinfo, '/Bouteille/delete') && preg_match('#^/Bouteille/delete/(?P<id>[^/]++)/(?P<millesime>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteBouteille']), array (  '_controller' => 'AppBundle\\Controller\\BouteilleController::bouteilleDeleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/Origine')) {
            // acceuilOrigine
            if ('/Origine' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\OrigineController::origineAction',  '_route' => 'acceuilOrigine',);
            }

            // origineID
            if (preg_match('#^/Origine/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'origineID']), array (  '_controller' => 'AppBundle\\Controller\\OrigineController::origineIdAction',));
            }

            // updateOrigine
            if (0 === strpos($pathinfo, '/Origine/update') && preg_match('#^/Origine/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'updateOrigine']), array (  '_controller' => 'AppBundle\\Controller\\OrigineController::origineUpdateAction',));
            }

            // deleteOrigine
            if (0 === strpos($pathinfo, '/Origine/delete') && preg_match('#^/Origine/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteOrigine']), array (  '_controller' => 'AppBundle\\Controller\\OrigineController::origineDeleteAction',));
            }

        }

        // insertOrigine
        if ('/origine/insert' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\OrigineController::originensertAction',  '_route' => 'insertOrigine',);
        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // app_security_logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'app_security_logout',);
        }

        if (0 === strpos($pathinfo, '/vin')) {
            // acceuilVin
            if ('/vin' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\VinController::VinAction',  '_route' => 'acceuilVin',);
            }

            // app_vin_vinid
            if (0 === strpos($pathinfo, '/vin/v') && preg_match('#^/vin/v(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'app_vin_vinid']), array (  '_controller' => 'AppBundle\\Controller\\VinController::vinIdAction',));
            }

            // OrigineVin
            if (preg_match('#^/vin/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'OrigineVin']), array (  '_controller' => 'AppBundle\\Controller\\VinController::vinIdAppellationAction',));
            }

            // insertVin
            if ('/vin/insert' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\VinController::vinInsertAction',  '_route' => 'insertVin',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_insertVin;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'insertVin'));
                }

                return $ret;
            }
            not_insertVin:

            // modifierVin
            if (0 === strpos($pathinfo, '/vin/update') && preg_match('#^/vin/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'modifierVin']), array (  '_controller' => 'AppBundle\\Controller\\VinController::vinUpdateAction',));
            }

            // deleteVin
            if (0 === strpos($pathinfo, '/vin/delete') && preg_match('#^/vin/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteVin']), array (  '_controller' => 'AppBundle\\Controller\\VinController::vinDeleteAction',));
            }

        }

        // home
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\VinController::Menu',  '_route' => 'home',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_home;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'home'));
            }

            return $ret;
        }
        not_home:

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\VinController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        // loginAdmin
        if ('/admin' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\VinController::adminAction',  '_route' => 'loginAdmin',);
        }

        // equipe
        if ('/equipe' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\VinController::eQAction',  '_route' => 'equipe',);
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
