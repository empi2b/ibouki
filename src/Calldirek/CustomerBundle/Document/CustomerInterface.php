<?php

namespace Calldirek\CustomerBundle\Document;

/**
 * Interface CustomerInterface
 * @package Calldirek\CustomerBundle\Document
 * @author Emmanuel G Piard <empi2b@gmail.com>
 */
interface CustomerInterface
{
    /**
     * Set precashId
     *
     * @param int $precashId
     * @return self
     */
    public function setPrecashId($precashId);

    /**
     * Get precashId
     *
     * @return int $precashId
     */
    public function getPrecashId();

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
     * Set username
     *
     * @param string $username
     * @return self
     */
    public function setUsername($username);

    /**
     * Get username
     *
     * @return string $username
     */
    public function getUsername();

    /**
     * Set securityQuestion
     *
     * @param string $securityQuestion
     * @return self
     */
    public function setSecurityQuestion($securityQuestion);

    /**
     * Get securityQuestion
     *
     * @return string $securityQuestion
     */
    public function getSecurityQuestion();

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName);

    /**
     * Get firstName
     *
     * @return string $firstName
     */
    public function getFirstName();

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName);

    /**
     * Get lastName
     *
     * @return string $lastName
     */
    public function getLastName();

    /**
     * Set email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email);

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail();

    /**
     * Set lastKnownEmail
     *
     * @param string $lastKnownEmail
     * @return self
     */
    public function setLastKnownEmail($lastKnownEmail);

    /**
     * Get lastKnownEmail
     *
     * @return string $lastKnownEmail
     */
    public function getLastKnownEmail();

    /**
     * Set phone
     *
     * @param string $phone
     * @return self
     */
    public function setPhone($phone);

    /**
     * Get phone
     *
     * @return string $phone
     */
    public function getPhone();

    /**
     * Set contactPreference
     *
     * @param string $contactPreference
     * @return self
     */
    public function setContactPreference($contactPreference);

    /**
     * Get contactPreference
     *
     * @return string $contactPreference
     */
    public function getContactPreference();

    /**
     * Set mobileCarrier
     *
     * @param MobileCarrierInterface $mobileCarrier
     * @return self
     */
    public function setMobileCarrier(MobileCarrierInterface $mobileCarrier);

    /**
     * Get mobileCarrier
     *
     * @return MobileCarrierInterface $mobileCarrier
     */
    public function getMobileCarrier();

    /**
     * Set timeZone
     *
     * @param string $timeZone
     * @return self
     */
    public function setTimeZone($timeZone);

    /**
     * Get timeZone
     *
     * @return string $timeZone
     */
    public function getTimeZone();

    /**
     * Set locale
     *
     * @param string $locale
     * @return self
     */
    public function setLocale($locale);

    /**
     * Get locale
     *
     * @return string $locale
     */
    public function getLocale();

    /**
     * Set roles
     *
     * @param RolesInterface $roles
     * @return self
     */
    public function setRoles(RolesInterface $roles);

    /**
     * Get roles
     *
     * @return RolesInterface $roles
     */
    public function getRoles();

    /**
     * Set activationTime
     *
     * @param string $activationTime
     * @return self
     */
    public function setActivationTime($activationTime);

    /**
     * Get activationTime
     *
     * @return string $activationTime
     */
    public function getActivationTime();

    /**
     * Set acctenate
     *
     * @param boolean $acctenate
     * @return self
     */
    public function setAcctenate($acctenate);

    /**
     * Get acctenate
     *
     * @return boolean $acctenate
     */
    public function getAcctenate();

    /**
     * Set acctexpired
     *
     * @param boolean $acctexpired
     * @return self
     */
    public function setAcctexpired($acctexpired);

    /**
     * Get acctexpired
     *
     * @return boolean $acctexpired
     */
    public function getAcctexpired();

    /**
     * Set acctlocked
     *
     * @param boolean $acctlocked
     * @return self
     */
    public function setAcctlocked($acctlocked);

    /**
     * Get acctlocked
     *
     * @return boolean $acctlocked
     */
    public function getAcctlocked();

    /**
     * Set pwdexpired
     *
     * @param boolean $pwdexpired
     * @return self
     */
    public function setPwdexpired($pwdexpired);

    /**
     * Get pwdexpired
     *
     * @return boolean $pwdexpired
     */
    public function getPwdexpired();

    /**
     * Set tempPwdFlag
     *
     * @param boolean $tempPwdFlag
     * @return self
     */
    public function setTempPwdFlag($tempPwdFlag);

    /**
     * Get tempPwdFlag
     *
     * @return boolean $tempPwdFlag
     */
    public function getTempPwdFlag();

    /**
     * Set consecutiveSecurityQuestionFailures
     *
     * @param int $consecutiveSecurityQuestionFailures
     * @return self
     */
    public function setConsecutiveSecurityQuestionFailures($consecutiveSecurityQuestionFailures);

    /**
     * Get consecutiveSecurityQuestionFailures
     *
     * @return int $consecutiveSecurityQuestionFailures
     */
    public function getConsecutiveSecurityQuestionFailures();

    /**
     * Set applicationId
     *
     * @param int $applicationId
     * @return self
     */
    public function setApplicationId($applicationId);

    /**
     * Get applicationId
     *
     * @return int $applicationId
     */
    public function getApplicationId();

    /**
     * Set gotoCardSetup
     *
     * @param boolean $gotoCardSetup
     * @return self
     */
    public function setGotoCardSetup($gotoCardSetup);

    /**
     * Get gotoCardSetup
     *
     * @return boolean $gotoCardSetup
     */
    public function getGotoCardSetup();

    /**
     * Set userAddress
     *
     * @param CustomerAddressInterface $userAddress
     * @return self
     */
    public function setUserAddress(CustomerAddressInterface $userAddress);

    /**
     * Get userAddress
     *
     * @return CustomerAddressInterface $userAddress
     */
    public function getUserAddress();

} 