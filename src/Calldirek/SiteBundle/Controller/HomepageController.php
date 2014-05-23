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

        echo 'Status = '.$response->getStatusCode().'<br />';
        echo 'Reason Phrase = '.$response->getReasonPhrase().'<br />';
        echo 'Effective Url = '.$response->getEffectiveUrl().'<br />';

        return $this->render('SiteBundle:Homepage:index.html.twig', array('response' => $response));
    }
} 