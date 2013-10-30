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

        // _assetic_66b4632
        if ($pathinfo === '/css/66b4632.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '66b4632',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_66b4632',);
        }

        if (0 === strpos($pathinfo, '/js/40d58c2')) {
            // _assetic_40d58c2
            if ($pathinfo === '/js/40d58c2.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '40d58c2',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_40d58c2',);
            }

            if (0 === strpos($pathinfo, '/js/40d58c2_part_1_bootstrap')) {
                // _assetic_40d58c2_0
                if ($pathinfo === '/js/40d58c2_part_1_bootstrap_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '40d58c2',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_40d58c2_0',);
                }

                // _assetic_40d58c2_1
                if ($pathinfo === '/js/40d58c2_part_1_bootstrap.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '40d58c2',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_40d58c2_1',);
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

        if (0 === strpos($pathinfo, '/a')) {
            // _welcome
            if ($pathinfo === '/a/welcome') {
                return array (  'template' => 'HUBackendBundle:welcome.html.twig',  '_route' => '_welcome',);
            }

            if (0 === strpos($pathinfo, '/a/log')) {
                // permission_login
                if (rtrim($pathinfo, '/') === '/a/login') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'permission_login');
                    }

                    return array (  '_controller' => 'HU\\BackendBundle\\Controller\\PermissionController::loginAction',  '_route' => 'permission_login',);
                }

                // permission_logout
                if (rtrim($pathinfo, '/') === '/a/logout') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'permission_logout');
                    }

                    return array (  '_controller' => 'HU\\BackendBundle\\Controller\\PermissionController::logoutAction',  '_route' => 'permission_logout',);
                }

            }

            // persission_check
            if (0 === strpos($pathinfo, '/a/check_permission') && preg_match('#^/a/check_permission/(?P<id>[^/]++)/(?P<action>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'persission_check')), array (  '_controller' => 'HU\\BackendBundle\\Controller\\PermissionController::check_permissionAction',));
            }

            if (0 === strpos($pathinfo, '/a/User')) {
                // user_index
                if (0 === strpos($pathinfo, '/a/User/index') && preg_match('#^/a/User/index(?:/(?P<id>[^/]++)(?:/(?P<min_number>[^/]++)(?:/(?P<max_number>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_index')), array (  '_controller' => 'HU\\BackendBundle\\Controller\\UserController::indexAction',  'id' => 'id',  'min_number' => 1,  'max_number' => 1000,));
                }

                // user_create
                if (0 === strpos($pathinfo, '/a/User/create') && preg_match('#^/a/User/create(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_create')), array (  '_controller' => 'HU\\BackendBundle\\Controller\\UserController::createAction',  'id' => 'id',));
                }

                // user_update
                if (0 === strpos($pathinfo, '/a/User/update') && preg_match('#^/a/User/update(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'HU\\BackendBundle\\Controller\\UserController::updateAction',  'id' => 'id',));
                }

                // user_delete
                if (0 === strpos($pathinfo, '/a/User/delete') && preg_match('#^/a/User/delete(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'HU\\BackendBundle\\Controller\\UserController::deleteAction',  'id' => 'id',));
                }

                // user_show
                if (0 === strpos($pathinfo, '/a/User/show') && preg_match('#^/a/User/show(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'HU\\BackendBundle\\Controller\\UserController::showAction',  'id' => 'id',));
                }

                // user_edit
                if (0 === strpos($pathinfo, '/a/User/edit') && preg_match('#^/a/User/edit(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'HU\\BackendBundle\\Controller\\UserController::editAction',  'id' => 'id',));
                }

                // user_register
                if (0 === strpos($pathinfo, '/a/User/register') && preg_match('#^/a/User/register/(?P<role_id>[^/]++)/(?P<pp_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_register')), array (  '_controller' => 'HU\\BackendBundle\\Controller\\UserController::registerAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
