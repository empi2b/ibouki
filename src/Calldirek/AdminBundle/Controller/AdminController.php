<?php

namespace Calldirek\AdminBundle\Controller;

use Calldirek\UserBundle\Entity\User;
use Calldirek\UserBundle\UserBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class AdminController
 * @package Calldirek\AdminBundle\Controller
 * @author Emmanuel G Piard <empi2b@gmail.com>
 */
class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminBundle:Admin:index.html.twig');
    }

    public function registerAgentAction()
    {
        $form = $this->container->get('fos_user.registration.form');
        $form->setData(new User());
        return $this->render('AdminBundle:Registration:register_agent.html.twig', array('form' => $form->createView()));
    }

    public function registerAdminAction()
    {
        $form = $this->container->get('fos_user.registration.form');
        $form->setData(new User());
        $form->remove('address');
        $form->remove('city');
        $form->remove('state');
        $form->remove('zipCode');


        return $this->render('AdminBundle:Registration:register_user.html.twig', array('form' => $form->createView()));
    }
} 