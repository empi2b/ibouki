<?php


namespace Calldirek\UserBundle\Services;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;

/**
 * Class LogoutSuccessHandler
 * @package Calldirek\UserBundle\Services
 * @author Emmanuel G Piard <empi2b@gmail.com>
 */
class LogoutSuccessHandler implements LogoutSuccessHandlerInterface
{

    /**
     * Creates a Response object to send upon a successful logout.
     *
     * @param Request $request
     *
     * @return Response never null
     */
    public function onLogoutSuccess(Request $request)
    {
        $referrerUrl = $request->headers->get('referrer');
        $response = new RedirectResponse($referrerUrl);
        return $response;
    }
}