<?php
/**
 * Created by PhpStorm.
 * User: G_R3G
 * Date: 5/21/14
 * Time: 11:02 PM
 */

namespace Calldirek\SiteBundle\Service;

use GuzzleHttp\Client as BaseClient;

class PrecashClient extends BaseClient
{
    public function __construct(array $configuration)
    {
        parent::__construct($configuration);
    }
} 