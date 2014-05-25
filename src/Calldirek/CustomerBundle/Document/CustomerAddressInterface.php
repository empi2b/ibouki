<?php

namespace Calldirek\CustomerBundle\Document;


interface CustomerAddressInterface
{
    /**
     * Set id
     *
     * @param int $id
     * @return self
     */
    public function setId($id);

    /**
     * Get id
     *
     * @return int $id
     */
    public function getId();

    /**
     * Set createDate
     *
     * @param string $createDate
     * @return self
     */
    public function setCreateDate($createDate);

    /**
     * Get createDate
     *
     * @return string $createDate
     */
    public function getCreateDate();

    /**
     * Set updateDate
     *
     * @param string $updateDate
     * @return self
     */
    public function setUpdateDate($updateDate);

    /**
     * Get updateDate
     *
     * @return string $updateDate
     */
    public function getUpdateDate();

    /**
     * Set userId
     *
     * @param int $userId
     * @return self
     */
    public function setUserId($userId);

    /**
     * Get userId
     *
     * @return int $userId
     */
    public function getUserId();

    /**
     * Set address1
     *
     * @param string $address1
     * @return self
     */
    public function setAddress1($address1);

    /**
     * Get address1
     *
     * @return string $address1
     */
    public function getAddress1();

    /**
     * Set address2
     *
     * @param string $address2
     * @return self
     */
    public function setAddress2($address2);

    /**
     * Get address2
     *
     * @return string $address2
     */
    public function getAddress2();

    /**
     * Set city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city);

    /**
     * Get city
     *
     * @return string $city
     */
    public function getCity();

    /**
     * Set state
     *
     * @param string $state
     * @return self
     */
    public function setState($state);

    /**
     * Get state
     *
     * @return string $state
     */
    public function getState();

    /**
     * Set zip
     *
     * @param string $zip
     * @return self
     */
    public function setZip($zip);

    /**
     * Get zip
     *
     * @return string $zip
     */
    public function getZip();

    /**
     * Set zipExt
     *
     * @param string $zipExt
     * @return self
     */
    public function setZipExt($zipExt);

    /**
     * Get zipExt
     *
     * @return string $zipExt
     */
    public function getZipExt();
} 