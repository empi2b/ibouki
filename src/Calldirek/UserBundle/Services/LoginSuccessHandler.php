<?php


namespace Calldirek\UserBundle\Services;

use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;

/**
 * Class LoginHandler
 * @package Calldirek\UserBundle\Services
 * @author Emmanuel G Piard <empi2b@gmail.com>
 */
class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    protected $router;
    protected $security;

    public function __construct(SecurityContext $security, Router $router)
    {
        $this->router = $router;
        $this->security = $security;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        if($this->security->isGranted('ROLE_SUPER_ADMIN')){

            $response = new RedirectResponse($this->router->generate('fos_user_profile'));

        } elseif($this->security->isGranted('ROLE_ADMIN')){

            $response = new RedirectResponse($this->router->generate('fos_user_profile'));

        } elseif($this->security->isGranted('ROLE_USER')){

            $referrerUrl = $request->headers->get('referrer');
            $response = new RedirectResponse($referrerUrl);

        }

        return $response;

    }

}