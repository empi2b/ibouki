<?php
/**
 * Created by PhpStorm.
 * User: G_R3G
 * Date: 5/21/14
 * Time: 11:02 PM
 */

namespace Calldirek\SiteBundle\Service;

use GuzzleHttp\Client as BaseClient;
use GuzzleHttp\Exception\RequestException;

class PrecashClient extends BaseClient
{
    public function __construct(array $configuration)
    {
        parent::__construct($configuration);
    }

    public function getUser()
    {
        $response = null;

        try{
            $response = $this->get('/user');

        }catch (RequestException $e){

            echo $e->getRequest()."\n";
            if($e->hasResponse()){
                echo $e->getResponse().'\n';
            }
        }

        return $response;
    }

    public function initApp()
    {

    }

    public function userH2HReg()
    {

    }
} 