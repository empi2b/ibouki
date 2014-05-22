<?php

namespace Calldirek\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    public function indexAction()
    {
        /** @var \Guzzle\Http\Client $precashClient */
        $precashClient = $this->container->get('guzzle.precash.client');

        $status = $precashClient->get('statuses/user_timeline.json');

        var_dump($status); exit;
        return $this->render('SiteBundle:Homepage:index.html.twig');
    }
} 