<?php

namespace Calldirek\CustomerBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Class CustomerAddress
 *
 * @ODM\EmbeddedDocument
 * @package Calldirek\CustomerBundle\Document
 * @author Emmanuel G Piard <empi2b@gmail.com>
 */
class CustomerAddress
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
     * @var int
     * @ODM\Int
     */
    protected $userId;

    /**
     * @var string
     * @ODM\String
     */
    protected $address1;

    /**
     * @var string
     * @ODM\String
     */
    protected $address2;

    /**
     * @var string
     * @ODM\String
     */
    protected $city;

    /**
     * @var string
     * @ODM\String
     */
    protected $state;

    /**
     * @var string
     * @ODM\String
     */
    protected $zip;

    /**
     * @var string
     * @ODM\String
     */
    protected $zipExt;



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
     * Set userId
     *
     * @param int $userId
     * @return self
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Get userId
     *
     * @return int $userId
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set address1
     *
     * @param string $address1
     * @return self
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
        return $this;
    }

    /**
     * Get address1
     *
     * @return string $address1
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param string $address2
     * @return self
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
        return $this;
    }

    /**
     * Get address2
     *
     * @return string $address2
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Get city
     *
     * @return string $city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Get state
     *
     * @return string $state
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set zip
     *
     * @param string $zip
     * @return self
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * Get zip
     *
     * @return string $zip
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set zipExt
     *
     * @param string $zipExt
     * @return self
     */
    public function setZipExt($zipExt)
    {
        $this->zipExt = $zipExt;
        return $this;
    }

    /**
     * Get zipExt
     *
     * @return string $zipExt
     */
    public function getZipExt()
    {
        return $this->zipExt;
    }
}
