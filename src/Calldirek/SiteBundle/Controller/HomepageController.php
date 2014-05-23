<?php

namespace Calldirek\SiteBundle\Controller;

use GuzzleHttp\Exception\RequestException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    public function indexAction()
    {
        $response = null;
        $data = null;

        /** @var \GuzzleHttp\Client $precashFinancialClient */
        $precashFinancialClient = $this->container->get('financial.services');

        try{

            $response = $precashFinancialClient->get('/user');

        }catch (RequestException $e){

            echo 'RequestException : '.$e->getRequest().'<br />';
            echo 'Message : '.$e->getMessage().'<br />';
            if($e->hasResponse()){
                echo 'Exception 2 : '.$e->getResponse();
            }

        }

        return $this->render('SiteBundle:Homepage:index.html.twig', array('response' => $response));
    }
} 