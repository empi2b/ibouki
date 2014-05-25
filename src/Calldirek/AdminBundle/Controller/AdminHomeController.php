<?php

namespace Calldirek\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminHomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminBundle:AdminHome:index.html.twig');
    }
} 