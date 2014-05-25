<?php

namespace Calldirek\CustomerBundle\Document;


interface MobileCarrierInterface
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
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name);

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName();

    /**
     * Set gateway
     *
     * @param string $gateway
     * @return self
     */
    public function setGateway($gateway);

    /**
     * Get gateway
     *
     * @return string $gateway
     */
    public function getGateway();
} 