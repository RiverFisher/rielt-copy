<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/container')) {
            // container_image_index
            if ('/container' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\Platform\\ContainerController::index',  '_route' => 'container_image_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'container_image_index'));
                }

                return $ret;
            }

            // container_new
            if ('/container/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_container_new;
                }

                return array (  '_controller' => 'App\\Controller\\Platform\\ContainerController::new',  '_route' => 'container_new',);
            }
            not_container_new:

        }

        elseif (0 === strpos($pathinfo, '/image')) {
            // image_index
            if ('/image' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\Platform\\ImageController::index',  '_route' => 'image_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'image_index'));
                }

                return $ret;
            }

            // image_new
            if ('/image/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_image_new;
                }

                return array (  '_controller' => 'App\\Controller\\Platform\\ImageController::newAction',  '_route' => 'image_new',);
            }
            not_image_new:

            // image_edit
            if (preg_match('#^/image/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_image_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'image_edit')), array (  '_controller' => 'App\\Controller\\Platform\\ImageController::editAction',));
            }
            not_image_edit:

            // image_delete
            if (preg_match('#^/image/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_image_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'image_delete')), array (  '_controller' => 'App\\Controller\\Platform\\ImageController::deleteAction',));
            }
            not_image_delete:

        }

        // app_platform_main_index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\Platform\\MainController::indexAction',  '_route' => 'app_platform_main_index',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'app_platform_main_index'));
            }

            return $ret;
        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\Platform\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\Platform\\SecurityController::logoutAction',  '_route' => 'logout',);
        }

        // registration
        if ('/registration' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\Platform\\SecurityController::registrationAction',  '_route' => 'registration',);
        }

        if (0 === strpos($pathinfo, '/real_property')) {
            // real_property_index
            if ('/real_property' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\RealProperty\\RealPropertyController::index',  '_route' => 'real_property_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'real_property_index'));
                }

                return $ret;
            }

            // real_property_new
            if ('/real_property/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_real_property_new;
                }

                return array (  '_controller' => 'App\\Controller\\RealProperty\\RealPropertyController::new',  '_route' => 'real_property_new',);
            }
            not_real_property_new:

            // tournament_show
            if (preg_match('#^/real_property/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_tournament_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tournament_show')), array (  '_controller' => 'App\\Controller\\RealProperty\\RealPropertyController::show',));
            }
            not_tournament_show:

            // real_property_edit
            if (preg_match('#^/real_property/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_real_property_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'real_property_edit')), array (  '_controller' => 'App\\Controller\\RealProperty\\RealPropertyController::edit',));
            }
            not_real_property_edit:

            // user_delete
            if (preg_match('#^/real_property/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'App\\Controller\\RealProperty\\RealPropertyController::delete',));
            }
            not_user_delete:

            if (0 === strpos($pathinfo, '/real_property/type')) {
                // real_property_type_index
                if ('/real_property/type' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\RealProperty\\RealPropertyTypeController::index',  '_route' => 'real_property_type_index',);
                }

                // real_property_type_new
                if ('/real_property/type/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_real_property_type_new;
                    }

                    return array (  '_controller' => 'App\\Controller\\RealProperty\\RealPropertyTypeController::newAction',  '_route' => 'real_property_type_new',);
                }
                not_real_property_type_new:

                // real_property_type_edit
                if (preg_match('#^/real_property/type/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_real_property_type_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'real_property_type_edit')), array (  '_controller' => 'App\\Controller\\RealProperty\\RealPropertyTypeController::editAction',));
                }
                not_real_property_type_edit:

                // real_property_type_delete
                if (preg_match('#^/real_property/type/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_real_property_type_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'real_property_type_delete')), array (  '_controller' => 'App\\Controller\\RealProperty\\RealPropertyTypeController::deleteAction',));
                }
                not_real_property_type_delete:

            }

        }

        elseif (0 === strpos($pathinfo, '/admin/user')) {
            // admin_user_index
            if ('/admin/user' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\Platform\\UserController::indexAction',  '_route' => 'admin_user_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_user_index'));
                }

                return $ret;
            }

            // admin_user_new
            if ('/admin/user/new' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\Platform\\UserController::newAction',  '_route' => 'admin_user_new',);
            }

            // admin_user_show
            if (preg_match('#^/admin/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_show')), array (  '_controller' => 'App\\Controller\\Platform\\UserController::showAction',));
            }

            // admin_user_edit
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_edit')), array (  '_controller' => 'App\\Controller\\Platform\\UserController::editAction',));
            }

            // admin_user_delete
            if (preg_match('#^/admin/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_delete')), array (  '_controller' => 'App\\Controller\\Platform\\UserController::deleteAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
