<?php

namespace Calldirek\CustomerBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * Class Customer
 * @package Calldirek\CustomerBundle\Document
 * @MongoDB\Document
 */
class Customer
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }
}
