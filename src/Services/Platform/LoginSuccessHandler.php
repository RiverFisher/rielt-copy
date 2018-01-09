<?php

namespace App\Services\Platform;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface {
    /**
     * @var Router $router
     */
    protected $router;

    /**
     * @var AuthorizationChecker $authorizationChecker
     */
    protected $authorizationChecker;

    /**
     * LoginSuccessHandler constructor.
     *
     * @param RouterInterface $router
     * @param AuthorizationChecker $authorizationChecker
     */
    public function __construct(RouterInterface $router, AuthorizationChecker $authorizationChecker) {
        $this->router = $router;
        $this->authorizationChecker = $authorizationChecker;
    }

    /**
     * Called when authentication succeeds
     *
     * @param Request $request
     * @param TokenInterface $token
     * @return RedirectResponse
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token) {
//        if ($this->authorizationChecker->isGranted('ROLE_USER')) {
//            $response = new RedirectResponse($this->router->generate(''));
//        }
//        else {
//            $response = new RedirectResponse($this->router->generate('admin_login'));
//        }
        $response = new RedirectResponse($this->router->generate('main'));
        return $response;
    }
}
