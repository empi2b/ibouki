<?php

namespace Calldirek\CustomerBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Class MobileCarrier
 *
 * @ODM\EmbeddedDocument
 * @package Calldirek\CustomerBundle\Document
 * @author Emmanuel G Piard <empi2b@gmail.com>
 */
class MobileCarrier
{
    /**
     * @ODM\Int
     */
    protected $id;

    /**
     * @var string
     * @ODM\String
     */
    protected $createDate;

    /**
     * @var string
     * @ODM\String
     */
    protected $updateDate;

    /**
     * @var string
     * @ODM\String
     */
    protected $name;

    /**
     * @var string
     * @ODM\String
     */
    protected $gateway;


    /**
     * Set id
     *
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get id
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set createDate
     *
     * @param string $createDate
     * @return self
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;
        return $this;
    }

    /**
     * Get createDate
     *
     * @return string $createDate
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set updateDate
     *
     * @param string $updateDate
     * @return self
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;
        return $this;
    }

    /**
     * Get updateDate
     *
     * @return string $updateDate
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set gateway
     *
     * @param string $gateway
     * @return self
     */
    public function setGateway($gateway)
    {
        $this->gateway = $gateway;
        return $this;
    }

    /**
     * Get gateway
     *
     * @return string $gateway
     */
    public function getGateway()
    {
        return $this->gateway;
    }
}
