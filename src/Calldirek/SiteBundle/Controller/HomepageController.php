<?php

namespace Calldirek\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    public function indexAction()
    {
        $response = null;
        $response = $this->container->get('financial.services')->getUser();

        return $this->render('SiteBundle:Homepage:index.html.twig', array('response' => $response));
    }
} 