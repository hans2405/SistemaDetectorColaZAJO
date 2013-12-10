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

        // ruta_micro_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ruta_micro_homepage');
            }

            return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ruta_micro_homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // usuario_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\UsuarioController::loginAction',  '_route' => 'usuario_login',);
                }

                // usuario_login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'usuario_login_check');
                }

            }

            // usuario_logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'usuario_logout');
            }

        }

        // consultar_ruta
        if (0 === strpos($pathinfo, '/usuario/consultar-ruta') && preg_match('#^/usuario/consultar\\-ruta(?:/(?P<linea>[^/]++)(?:/(?P<calle>[^/]++))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'consultar_ruta')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\ConsultarRutaController::consultarRutaAction',  'linea' => NULL,  'calle' => NULL,));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/lineamicro')) {
                // lineamicro
                if (rtrim($pathinfo, '/') === '/admin/lineamicro') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'lineamicro');
                    }

                    return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\LineaMicroController::listarAction',  '_route' => 'lineamicro',);
                }

                // lineamicro_show
                if (preg_match('#^/admin/lineamicro/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lineamicro_show')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\LineaMicroController::showAction',));
                }

                // lineamicro_new
                if ($pathinfo === '/admin/lineamicro/new') {
                    return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\LineaMicroController::newAction',  '_route' => 'lineamicro_new',);
                }

                // lineamicro_create
                if ($pathinfo === '/admin/lineamicro/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_lineamicro_create;
                    }

                    return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\LineaMicroController::createAction',  '_route' => 'lineamicro_create',);
                }
                not_lineamicro_create:

                // lineamicro_edit
                if (preg_match('#^/admin/lineamicro/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lineamicro_edit')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\LineaMicroController::editAction',));
                }

                // lineamicro_update
                if (preg_match('#^/admin/lineamicro/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_lineamicro_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lineamicro_update')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\LineaMicroController::updateAction',));
                }
                not_lineamicro_update:

                // lineamicro_delete
                if (preg_match('#^/admin/lineamicro/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_lineamicro_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lineamicro_delete')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\LineaMicroController::deleteAction',));
                }
                not_lineamicro_delete:

            }

            if (0 === strpos($pathinfo, '/admin/calle')) {
                // calle
                if (rtrim($pathinfo, '/') === '/admin/calle') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'calle');
                    }

                    return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\CalleController::indexAction',  '_route' => 'calle',);
                }

                // calle_show
                if (preg_match('#^/admin/calle/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'calle_show')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\CalleController::showAction',));
                }

                // calle_new
                if ($pathinfo === '/admin/calle/new') {
                    return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\CalleController::newAction',  '_route' => 'calle_new',);
                }

                // calle_create
                if ($pathinfo === '/admin/calle/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_calle_create;
                    }

                    return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\CalleController::createAction',  '_route' => 'calle_create',);
                }
                not_calle_create:

                // calle_edit
                if (preg_match('#^/admin/calle/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'calle_edit')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\CalleController::editAction',));
                }

                // calle_update
                if (preg_match('#^/admin/calle/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_calle_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'calle_update')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\CalleController::updateAction',));
                }
                not_calle_update:

                // calle_delete
                if (preg_match('#^/admin/calle/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_calle_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'calle_delete')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\CalleController::deleteAction',));
                }
                not_calle_delete:

            }

            if (0 === strpos($pathinfo, '/admin/lugar')) {
                // lugar
                if (rtrim($pathinfo, '/') === '/admin/lugar') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'lugar');
                    }

                    return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\LugarController::indexAction',  '_route' => 'lugar',);
                }

                // lugar_show
                if (preg_match('#^/admin/lugar/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lugar_show')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\LugarController::showAction',));
                }

                // lugar_new
                if ($pathinfo === '/admin/lugar/new') {
                    return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\LugarController::newAction',  '_route' => 'lugar_new',);
                }

                // lugar_create
                if ($pathinfo === '/admin/lugar/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_lugar_create;
                    }

                    return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\LugarController::createAction',  '_route' => 'lugar_create',);
                }
                not_lugar_create:

                // lugar_edit
                if (preg_match('#^/admin/lugar/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lugar_edit')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\LugarController::editAction',));
                }

                // lugar_update
                if (preg_match('#^/admin/lugar/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_lugar_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lugar_update')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\LugarController::updateAction',));
                }
                not_lugar_update:

                // lugar_delete
                if (preg_match('#^/admin/lugar/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_lugar_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lugar_delete')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\LugarController::deleteAction',));
                }
                not_lugar_delete:

            }

            if (0 === strpos($pathinfo, '/admin/roles')) {
                // roles
                if (rtrim($pathinfo, '/') === '/admin/roles') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'roles');
                    }

                    return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\RolesController::indexAction',  '_route' => 'roles',);
                }

                // roles_show
                if (preg_match('#^/admin/roles/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'roles_show')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\RolesController::showAction',));
                }

                // roles_new
                if ($pathinfo === '/admin/roles/new') {
                    return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\RolesController::newAction',  '_route' => 'roles_new',);
                }

                // roles_create
                if ($pathinfo === '/admin/roles/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_roles_create;
                    }

                    return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\RolesController::createAction',  '_route' => 'roles_create',);
                }
                not_roles_create:

                // roles_edit
                if (preg_match('#^/admin/roles/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'roles_edit')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\RolesController::editAction',));
                }

                // roles_update
                if (preg_match('#^/admin/roles/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_roles_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'roles_update')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\RolesController::updateAction',));
                }
                not_roles_update:

                // roles_delete
                if (preg_match('#^/admin/roles/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_roles_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'roles_delete')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\RolesController::deleteAction',));
                }
                not_roles_delete:

            }

            if (0 === strpos($pathinfo, '/admin/gestion-usuarios')) {
                // usuario
                if (rtrim($pathinfo, '/') === '/admin/gestion-usuarios') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'usuario');
                    }

                    return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario',);
                }

                // usuario_show
                if (preg_match('#^/admin/gestion\\-usuarios/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\UsuarioController::showAction',));
                }

                // usuario_new
                if ($pathinfo === '/admin/gestion-usuarios/new') {
                    return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario_new',);
                }

                // usuario_create
                if ($pathinfo === '/admin/gestion-usuarios/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_usuario_create;
                    }

                    return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\UsuarioController::createAction',  '_route' => 'usuario_create',);
                }
                not_usuario_create:

                // usuario_edit
                if (preg_match('#^/admin/gestion\\-usuarios/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\UsuarioController::editAction',));
                }

                // usuario_update
                if (preg_match('#^/admin/gestion\\-usuarios/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_usuario_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_update')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\UsuarioController::updateAction',));
                }
                not_usuario_update:

                // usuario_delete
                if (preg_match('#^/admin/gestion\\-usuarios/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_usuario_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_delete')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\UsuarioController::deleteAction',));
                }
                not_usuario_delete:

            }

            if (0 === strpos($pathinfo, '/admin/ruta')) {
                // ruta
                if (rtrim($pathinfo, '/') === '/admin/ruta') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ruta');
                    }

                    return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\RutaController::indexAction',  '_route' => 'ruta',);
                }

                // ruta_show
                if (preg_match('#^/admin/ruta/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ruta_show')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\RutaController::showAction',));
                }

                // ruta_new
                if ($pathinfo === '/admin/ruta/new') {
                    return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\RutaController::newAction',  '_route' => 'ruta_new',);
                }

                // ruta_create
                if ($pathinfo === '/admin/ruta/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ruta_create;
                    }

                    return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\RutaController::createAction',  '_route' => 'ruta_create',);
                }
                not_ruta_create:

                // ruta_edit
                if (preg_match('#^/admin/ruta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ruta_edit')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\RutaController::editAction',));
                }

                // ruta_update
                if (preg_match('#^/admin/ruta/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_ruta_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ruta_update')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\RutaController::updateAction',));
                }
                not_ruta_update:

                // ruta_delete
                if (preg_match('#^/admin/ruta/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_ruta_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ruta_delete')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\RutaController::deleteAction',));
                }
                not_ruta_delete:

            }

        }

        if (0 === strpos($pathinfo, '/entidad')) {
            // entidad
            if (rtrim($pathinfo, '/') === '/entidad') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'entidad');
                }

                return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\EntidadController::indexAction',  '_route' => 'entidad',);
            }

            // entidad_show
            if (preg_match('#^/entidad/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entidad_show')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\EntidadController::showAction',));
            }

            // entidad_new
            if ($pathinfo === '/entidad/new') {
                return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\EntidadController::newAction',  '_route' => 'entidad_new',);
            }

            // entidad_create
            if ($pathinfo === '/entidad/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_entidad_create;
                }

                return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\EntidadController::createAction',  '_route' => 'entidad_create',);
            }
            not_entidad_create:

            // entidad_edit
            if (preg_match('#^/entidad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entidad_edit')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\EntidadController::editAction',));
            }

            // entidad_update
            if (preg_match('#^/entidad/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_entidad_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entidad_update')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\EntidadController::updateAction',));
            }
            not_entidad_update:

            // entidad_delete
            if (preg_match('#^/entidad/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_entidad_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'entidad_delete')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\EntidadController::deleteAction',));
            }
            not_entidad_delete:

        }

        if (0 === strpos($pathinfo, '/sucursal')) {
            // sucursal
            if (rtrim($pathinfo, '/') === '/sucursal') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sucursal');
                }

                return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\SucursalController::indexAction',  '_route' => 'sucursal',);
            }

            // sucursal_show
            if (preg_match('#^/sucursal/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sucursal_show')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\SucursalController::showAction',));
            }

            // sucursal_new
            if ($pathinfo === '/sucursal/new') {
                return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\SucursalController::newAction',  '_route' => 'sucursal_new',);
            }

            // sucursal_create
            if ($pathinfo === '/sucursal/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_sucursal_create;
                }

                return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\SucursalController::createAction',  '_route' => 'sucursal_create',);
            }
            not_sucursal_create:

            // sucursal_edit
            if (preg_match('#^/sucursal/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sucursal_edit')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\SucursalController::editAction',));
            }

            // sucursal_update
            if (preg_match('#^/sucursal/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_sucursal_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sucursal_update')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\SucursalController::updateAction',));
            }
            not_sucursal_update:

            // sucursal_delete
            if (preg_match('#^/sucursal/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_sucursal_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sucursal_delete')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\SucursalController::deleteAction',));
            }
            not_sucursal_delete:

        }

        if (0 === strpos($pathinfo, '/ticket')) {
            // ticket
            if (rtrim($pathinfo, '/') === '/ticket') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ticket');
                }

                return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\TicketController::indexAction',  '_route' => 'ticket',);
            }

            // ticket_show
            if (preg_match('#^/ticket/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ticket_show')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\TicketController::showAction',));
            }

            // ticket_new
            if ($pathinfo === '/ticket/new') {
                return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\TicketController::newAction',  '_route' => 'ticket_new',);
            }

            // ticket_create
            if ($pathinfo === '/ticket/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ticket_create;
                }

                return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\TicketController::createAction',  '_route' => 'ticket_create',);
            }
            not_ticket_create:

            // ticket_edit
            if (preg_match('#^/ticket/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ticket_edit')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\TicketController::editAction',));
            }

            // ticket_update
            if (preg_match('#^/ticket/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_ticket_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ticket_update')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\TicketController::updateAction',));
            }
            not_ticket_update:

            // ticket_delete
            if (preg_match('#^/ticket/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_ticket_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ticket_delete')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\TicketController::deleteAction',));
            }
            not_ticket_delete:

        }

        if (0 === strpos($pathinfo, '/horario')) {
            // horario
            if (rtrim($pathinfo, '/') === '/horario') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'horario');
                }

                return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\HorarioController::indexAction',  '_route' => 'horario',);
            }

            // horario_show
            if (preg_match('#^/horario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'horario_show')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\HorarioController::showAction',));
            }

            // horario_new
            if ($pathinfo === '/horario/new') {
                return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\HorarioController::newAction',  '_route' => 'horario_new',);
            }

            // horario_create
            if ($pathinfo === '/horario/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_horario_create;
                }

                return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\HorarioController::createAction',  '_route' => 'horario_create',);
            }
            not_horario_create:

            // horario_edit
            if (preg_match('#^/horario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'horario_edit')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\HorarioController::editAction',));
            }

            // horario_update
            if (preg_match('#^/horario/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_horario_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'horario_update')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\HorarioController::updateAction',));
            }
            not_horario_update:

            // horario_delete
            if (preg_match('#^/horario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_horario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'horario_delete')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\HorarioController::deleteAction',));
            }
            not_horario_delete:

        }

        if (0 === strpos($pathinfo, '/caja')) {
            // caja
            if (rtrim($pathinfo, '/') === '/caja') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'caja');
                }

                return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\CajaController::indexAction',  '_route' => 'caja',);
            }

            // caja_show
            if (preg_match('#^/caja/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'caja_show')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\CajaController::showAction',));
            }

            // caja_new
            if ($pathinfo === '/caja/new') {
                return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\CajaController::newAction',  '_route' => 'caja_new',);
            }

            // caja_create
            if ($pathinfo === '/caja/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_caja_create;
                }

                return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\CajaController::createAction',  '_route' => 'caja_create',);
            }
            not_caja_create:

            // caja_edit
            if (preg_match('#^/caja/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'caja_edit')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\CajaController::editAction',));
            }

            // caja_update
            if (preg_match('#^/caja/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_caja_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'caja_update')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\CajaController::updateAction',));
            }
            not_caja_update:

            // caja_delete
            if (preg_match('#^/caja/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_caja_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'caja_delete')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\CajaController::deleteAction',));
            }
            not_caja_delete:

        }

        if (0 === strpos($pathinfo, '/servicio')) {
            // servicio
            if (rtrim($pathinfo, '/') === '/servicio') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'servicio');
                }

                return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\ServicioController::indexAction',  '_route' => 'servicio',);
            }

            // servicio_show
            if (preg_match('#^/servicio/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'servicio_show')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\ServicioController::showAction',));
            }

            // servicio_new
            if ($pathinfo === '/servicio/new') {
                return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\ServicioController::newAction',  '_route' => 'servicio_new',);
            }

            // servicio_create
            if ($pathinfo === '/servicio/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_servicio_create;
                }

                return array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\ServicioController::createAction',  '_route' => 'servicio_create',);
            }
            not_servicio_create:

            // servicio_edit
            if (preg_match('#^/servicio/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'servicio_edit')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\ServicioController::editAction',));
            }

            // servicio_update
            if (preg_match('#^/servicio/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_servicio_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'servicio_update')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\ServicioController::updateAction',));
            }
            not_servicio_update:

            // servicio_delete
            if (preg_match('#^/servicio/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_servicio_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'servicio_delete')), array (  '_controller' => 'Taller\\RutaMicroBundle\\Controller\\ServicioController::deleteAction',));
            }
            not_servicio_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
