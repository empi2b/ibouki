<?php

namespace Calldirek\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Calldirek\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="agentId", type="integer", length=11)
     * Assert\NotBlank(message="Please enter a valid agentId.", groups={"Registration"})
     * Assert\Type(type="integer", message="AgentId must be numeric.")
     */
    public $agentId;


    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255)
     * @Assert\NotBlank(message="Please enter a first name", groups={"Registration", "Profile"})
     */
    public $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255)
     * @Assert\NotBlank(message="Please enter a last name", groups={"Registration", "Profile"})
     */
    public $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="phoneNumber", type="string", length=255)
     * @Assert\NotBlank(message="Please enter a first name", groups={"Registration", "Profile"})
     * @Assert\Length(min="10", minMessage="phone number must be minimum 10 digits long", groups={"Registration", "Profile"})
     * @Assert\Length(max="10", maxMessage="phone number must be max 10 digits long", groups={"Registration", "Profile"})
     */
    public $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     * @Assert\NotBlank(message="Please enter an address", groups={"Registration", "Profile"})
     *
     */
    public $address;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     * @Assert\NotBlank(message="Please enter a city", groups={"Registration", "Profile"})
     */
    public $city;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=255)
     * @Assert\NotBlank(message="Please select a state", groups={"Registration", "Profile"})
     */
    public $state;


    /**
     * @var string
     *
     * @ORM\Column(name="zipCode", type="integer", length=5)
     * @Assert\NotBlank(message="Please enter a zip code", groups={"Registration", "Profile"})
     * @Assert\Length(min="5", minMessage="zip code must be 5 digits long", groups={"Registration", "Profile"})
     * @Assert\Length(max="5", maxMessage="zip code must be 5 digits long", groups={"Registration", "Profile"})
     * @Assert\Type(type="integer", message="Zip code must be numeric")
     */
    public $zipCode;

    /**
     * @var \Datetime
     * @ORM\Column(type="datetime")
     */
    public $createdDate;

    /**
     * @var \Datetime
     * @ORM\Column(type="datetime")
     */
    public $lastUpdated;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    public $createdBy;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    public $lastUpdatedBy;


    public function __construct()
    {
        parent::__construct();
        $this->agentId = 0;
    }


    /**
     * @param string $createdBy
     * @return User
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param string $lastUpdatedBy
     * @return User
     */
    public function setLastUpdatedBy($lastUpdatedBy)
    {
        $this->lastUpdatedBy = $lastUpdatedBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastUpdatedBy()
    {
        return $this->lastUpdatedBy;
    }

    /**
     * @param \Datetime $createdDate
     * @return User
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * @return \Datetime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param \Datetime $lastUpdated
     * @return User
     */
    public function setLastUpdated($lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;
        return $this;
    }

    /**
     * @return \Datetime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * @param int $agentId
     *
     * @return User
     */
    public function setAgentId($agentId)
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgentId()
    {
        return $this->agentId;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     * @return User
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string 
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return User
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }


    /**
     * @param string $zipCode
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }
}
