<?php

namespace Calldirek\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $user = $this->get('fos_user.user_manager')->findUserByUsername('lpiard');
        var_dump($user); exit;
        return $this->render('SiteBundle:Default:index.html.twig', array('name' => $name));
    }
}
