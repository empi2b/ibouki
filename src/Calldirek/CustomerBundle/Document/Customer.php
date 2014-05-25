<?php

namespace Calldirek\CustomerBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Class Customer
 * @package Calldirek\CustomerBundle\Document
 * @ODM\Document(repositoryClass="Calldirek\CustomerBundle\Repository\CustomerRepository", collection="customers")
 * @author Emmanuel G Piard <empi2b@gmail.com>
 */
class Customer implements CustomerInterface
{
    /**
     * @var mixed
     * @ODM\Id
     */
    protected $id;

    /**
     * @var int
     * @ODM\Int
     * @ODM\Index(unique=true, order="desc")
     */
    protected $precashId;

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
     * @ODM\Index(unique=true, order="desc")
     */
    protected $username;

    /**
     * @var string
     * @ODM\String
     */
    protected $securityQuestion;

    /**
     * @var string
     * @ODM\String
     */
    protected $firstName;

    /**
     * @var string
     * @ODM\String
     */
    protected $lastName;

    /**
     * @var string
     * @ODM\String
     */
    protected $email;

    /**
     * @var string
     * @ODM\String
     */
    protected $lastKnownEmail;

    /**
     * @var string
     * @ODM\String
     * @ODM\Index(order="asc")
     */
    protected $phone;

    /**
     * @var string
     * @ODM\String
     */
    protected $contactPreference;

    /**
     * @var Collection|\Calldirek\CustomerBundle\Document\MobileCarrier
     * @ODM\EmbedOne(targetDocument="MobileCarrier")
     */
    protected $mobileCarrier;

    /**
     * @var string
     * @ODM\String
     *
     */
    protected $timeZone;

    /**
     * @var string
     * @ODM\String
     */
    protected $locale;

    /**
     * @var Collection|\Calldirek\CustomerBundle\Document\Roles
     * @ODM\EmbedOne(targetDocument="Roles")
     */
    protected $roles;

    /**
     * @var string
     * @ODM\String
     * @ODM\Index(order="asc")
     */
    protected $activationTime;

    /**
     * @var boolean
     * @ODM\Boolean
     */
    protected $acctenate;

    /**
     * @var boolean
     * @ODM\Boolean
     */
    protected $acctexpired;

    /**
     * @var boolean
     * @ODM\Boolean
     */
    protected $acctlocked;

    /**
     * @var boolean
     * @ODM\Boolean
     */
    protected $pwdexpired;

    /**
     * @var boolean
     * @ODM\Boolean
     */
    protected $tempPwdFlag;

    /**
     * @var int
     * @ODM\Int
     */
    protected $consecutiveSecurityQuestionFailures;

    /**
     * @var int
     * @ODM\Int
     * @ODM\Index(order="asc")
     */
    protected $applicationId;

    /**
     * @var boolean
     * @ODM\Boolean
     */
    protected $gotoCardSetup;

    /**
     * @var Collection|\Calldirek\CustomerBundle\Document\CustomerAddress
     * @ODM\EmbedOne(targetDocument="CustomerAddress")
     */
    protected $userAddress;


    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set precashId
     *
     * @param int $precashId
     * @return self
     */
    public function setPrecashId($precashId)
    {
        $this->precashId = $precashId;
        return $this;
    }

    /**
     * Get precashId
     *
     * @return int $precashId
     */
    public function getPrecashId()
    {
        return $this->precashId;
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
     * Set username
     *
     * @param string $username
     * @return self
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Get username
     *
     * @return string $username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set securityQuestion
     *
     * @param string $securityQuestion
     * @return self
     */
    public function setSecurityQuestion($securityQuestion)
    {
        $this->securityQuestion = $securityQuestion;
        return $this;
    }

    /**
     * Get securityQuestion
     *
     * @return string $securityQuestion
     */
    public function getSecurityQuestion()
    {
        return $this->securityQuestion;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string $lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set lastKnownEmail
     *
     * @param string $lastKnownEmail
     * @return self
     */
    public function setLastKnownEmail($lastKnownEmail)
    {
        $this->lastKnownEmail = $lastKnownEmail;
        return $this;
    }

    /**
     * Get lastKnownEmail
     *
     * @return string $lastKnownEmail
     */
    public function getLastKnownEmail()
    {
        return $this->lastKnownEmail;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Get phone
     *
     * @return string $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set contactPreference
     *
     * @param string $contactPreference
     * @return self
     */
    public function setContactPreference($contactPreference)
    {
        $this->contactPreference = $contactPreference;
        return $this;
    }

    /**
     * Get contactPreference
     *
     * @return string $contactPreference
     */
    public function getContactPreference()
    {
        return $this->contactPreference;
    }

    /**
     * Set mobileCarrier
     *
     * @param MobileCarrierInterface $mobileCarrier
     * @return self
     */
    public function setMobileCarrier(MobileCarrierInterface $mobileCarrier)
    {
        $this->mobileCarrier = $mobileCarrier;
        return $this;
    }

    /**
     * Get mobileCarrier
     *
     * @return MobileCarrierInterface $mobileCarrier
     */
    public function getMobileCarrier()
    {
        return $this->mobileCarrier;
    }

    /**
     * Set timeZone
     *
     * @param string $timeZone
     * @return self
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
        return $this;
    }

    /**
     * Get timeZone
     *
     * @return string $timeZone
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * Set locale
     *
     * @param string $locale
     * @return self
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * Get locale
     *
     * @return string $locale
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set roles
     *
     * @param RolesInterface $roles
     * @return self
     */
    public function setRoles(RolesInterface $roles)
    {
        $this->roles = $roles;
        return $this;
    }

    /**
     * Get roles
     *
     * @return RolesInterface $roles
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Set activationTime
     *
     * @param string $activationTime
     * @return self
     */
    public function setActivationTime($activationTime)
    {
        $this->activationTime = $activationTime;
        return $this;
    }

    /**
     * Get activationTime
     *
     * @return string $activationTime
     */
    public function getActivationTime()
    {
        return $this->activationTime;
    }

    /**
     * Set acctenate
     *
     * @param boolean $acctenate
     * @return self
     */
    public function setAcctenate($acctenate)
    {
        $this->acctenate = $acctenate;
        return $this;
    }

    /**
     * Get acctenate
     *
     * @return boolean $acctenate
     */
    public function getAcctenate()
    {
        return $this->acctenate;
    }

    /**
     * Set acctexpired
     *
     * @param boolean $acctexpired
     * @return self
     */
    public function setAcctexpired($acctexpired)
    {
        $this->acctexpired = $acctexpired;
        return $this;
    }

    /**
     * Get acctexpired
     *
     * @return boolean $acctexpired
     */
    public function getAcctexpired()
    {
        return $this->acctexpired;
    }

    /**
     * Set acctlocked
     *
     * @param boolean $acctlocked
     * @return self
     */
    public function setAcctlocked($acctlocked)
    {
        $this->acctlocked = $acctlocked;
        return $this;
    }

    /**
     * Get acctlocked
     *
     * @return boolean $acctlocked
     */
    public function getAcctlocked()
    {
        return $this->acctlocked;
    }

    /**
     * Set pwdexpired
     *
     * @param boolean $pwdexpired
     * @return self
     */
    public function setPwdexpired($pwdexpired)
    {
        $this->pwdexpired = $pwdexpired;
        return $this;
    }

    /**
     * Get pwdexpired
     *
     * @return boolean $pwdexpired
     */
    public function getPwdexpired()
    {
        return $this->pwdexpired;
    }

    /**
     * Set tempPwdFlag
     *
     * @param boolean $tempPwdFlag
     * @return self
     */
    public function setTempPwdFlag($tempPwdFlag)
    {
        $this->tempPwdFlag = $tempPwdFlag;
        return $this;
    }

    /**
     * Get tempPwdFlag
     *
     * @return boolean $tempPwdFlag
     */
    public function getTempPwdFlag()
    {
        return $this->tempPwdFlag;
    }

    /**
     * Set consecutiveSecurityQuestionFailures
     *
     * @param int $consecutiveSecurityQuestionFailures
     * @return self
     */
    public function setConsecutiveSecurityQuestionFailures($consecutiveSecurityQuestionFailures)
    {
        $this->consecutiveSecurityQuestionFailures = $consecutiveSecurityQuestionFailures;
        return $this;
    }

    /**
     * Get consecutiveSecurityQuestionFailures
     *
     * @return int $consecutiveSecurityQuestionFailures
     */
    public function getConsecutiveSecurityQuestionFailures()
    {
        return $this->consecutiveSecurityQuestionFailures;
    }

    /**
     * Set applicationId
     *
     * @param int $applicationId
     * @return self
     */
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;
        return $this;
    }

    /**
     * Get applicationId
     *
     * @return int $applicationId
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }

    /**
     * Set gotoCardSetup
     *
     * @param boolean $gotoCardSetup
     * @return self
     */
    public function setGotoCardSetup($gotoCardSetup)
    {
        $this->gotoCardSetup = $gotoCardSetup;
        return $this;
    }

    /**
     * Get gotoCardSetup
     *
     * @return boolean $gotoCardSetup
     */
    public function getGotoCardSetup()
    {
        return $this->gotoCardSetup;
    }

    /**
     * Set userAddress
     *
     * @param CustomerAddressInterface $userAddress
     * @return self
     */
    public function setUserAddress(CustomerAddressInterface $userAddress)
    {
        $this->userAddress = $userAddress;
        return $this;
    }

    /**
     * Get userAddress
     *
     * @return CustomerAddressInterface $userAddress
     */
    public function getUserAddress()
    {
        return $this->userAddress;
    }
}
