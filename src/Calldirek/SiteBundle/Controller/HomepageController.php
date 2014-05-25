<?php

namespace Calldirek\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteBundle:Homepage:index.html.twig');
    }
} 