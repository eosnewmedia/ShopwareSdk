<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Shipping implements ShippingInterface
{
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id")
     */
    private $id;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("orderId")
     */
    private $orderId;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("countryId")
     */
    private $countryId;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("stateId")
     */
    private $stateId;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("customerId")
     */
    private $customerId;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("company")
     */
    private $company;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("department")
     */
    private $department;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("salutation")
     */
    private $salutation;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("firstName")
     */
    private $firstName;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("lastName")
     */
    private $lastName;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("street")
     */
    private $street;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("zipCode")
     */
    private $zipCode;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("city")
     */
    private $city;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("additionalAddressLine1")
     */
    private $additionalAddressLine1;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("additionalAddressLine2")
     */
    private $additionalAddressLine2;
    
    /**
     * @var CountryInterface
     * @Serializer\Type("Enm\ShopwareSdk\Model\Order\Country")
     * @Serializer\SerializedName("country")
     */
    private $country;
    
    /**
     * Attribute is not needed
     */
    
    /**
     * @return int
     */
    public function getId(): int
    {
        return (int)$this->id;
    }
    
    /**
     * @param int $id
     *
     * @return ShippingInterface
     */
    public function setId(int $id): ShippingInterface
    {
        $this->id = $id;
        
        return $this;
    }
    
    /**
     * @return int
     */
    public function getOrderId(): int
    {
        return (int)$this->orderId;
    }
    
    /**
     * @param int $orderId
     *
     * @return ShippingInterface
     */
    public function setOrderId(int $orderId): ShippingInterface
    {
        $this->orderId = $orderId;
        
        return $this;
    }
    
    /**
     * @return int
     */
    public function getCountryId(): int
    {
        return (int)$this->countryId;
    }
    
    /**
     * @param int $countryId
     *
     * @return ShippingInterface
     */
    public function setCountryId(int $countryId): ShippingInterface
    {
        $this->countryId = $countryId;
        
        return $this;
    }
    
    /**
     * @return int
     */
    public function getStateId(): int
    {
        return (int)$this->stateId;
    }
    
    /**
     * @param int $stateId
     *
     * @return ShippingInterface
     */
    public function setStateId(int $stateId): ShippingInterface
    {
        $this->stateId = $stateId;
        
        return $this;
    }
    
    /**
     * @return int
     */
    public function getCustomerId(): int
    {
        return (int)$this->customerId;
    }
    
    /**
     * @param int $customerId
     *
     * @return ShippingInterface
     */
    public function setCustomerId(int $customerId): ShippingInterface
    {
        $this->customerId = $customerId;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getCompany(): string
    {
        return (string)$this->company;
    }
    
    /**
     * @param string $company
     *
     * @return ShippingInterface
     */
    public function setCompany(string $company): ShippingInterface
    {
        $this->company = $company;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getDepartment(): string
    {
        return (string)$this->department;
    }
    
    /**
     * @param string $department
     *
     * @return ShippingInterface
     */
    public function setDepartment(string $department): ShippingInterface
    {
        $this->department = $department;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getSalutation(): string
    {
        return (string)$this->salutation;
    }
    
    /**
     * @param string $salutation
     *
     * @return ShippingInterface
     */
    public function setSalutation(string $salutation): ShippingInterface
    {
        $this->salutation = $salutation;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return (string)$this->firstName;
    }
    
    /**
     * @param string $firstName
     *
     * @return ShippingInterface
     */
    public function setFirstName(string $firstName): ShippingInterface
    {
        $this->firstName = $firstName;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getLastName(): string
    {
        return (string)$this->lastName;
    }
    
    /**
     * @param string $lastName
     *
     * @return ShippingInterface
     */
    public function setLastName(string $lastName): ShippingInterface
    {
        $this->lastName = $lastName;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getStreet(): string
    {
        return (string)$this->street;
    }
    
    /**
     * @param string $street
     *
     * @return ShippingInterface
     */
    public function setStreet(string $street): ShippingInterface
    {
        $this->street = $street;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getZipCode(): string
    {
        return (string)$this->zipCode;
    }
    
    /**
     * @param string $zipCode
     *
     * @return ShippingInterface
     */
    public function setZipCode(string $zipCode): ShippingInterface
    {
        $this->zipCode = $zipCode;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getCity(): string
    {
        return (string)$this->city;
    }
    
    /**
     * @param string $city
     *
     * @return ShippingInterface
     */
    public function setCity(string $city): ShippingInterface
    {
        $this->city = $city;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getAdditionalAddressLine1(): string
    {
        return (string)$this->additionalAddressLine1;
    }
    
    /**
     * @param string $additionalAddressLine1
     *
     * @return ShippingInterface
     */
    public function setAdditionalAddressLine1(string $additionalAddressLine1): ShippingInterface
    {
        $this->additionalAddressLine1 = $additionalAddressLine1;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getAdditionalAddressLine2(): string
    {
        return (string)$this->additionalAddressLine2;
    }
    
    /**
     * @param string $additionalAddressLine2
     *
     * @return ShippingInterface
     */
    public function setAdditionalAddressLine2(string $additionalAddressLine2): ShippingInterface
    {
        $this->additionalAddressLine2 = $additionalAddressLine2;
        
        return $this;
    }
    
    /**
     * @return CountryInterface
     */
    public function getCountry(): CountryInterface
    {
        return $this->country;
    }
    
    /**
     * @param CountryInterface $country
     *
     * @return ShippingInterface
     */
    public function setCountry(CountryInterface $country): ShippingInterface
    {
        $this->country = $country;
        
        return $this;
    }
    
    /**
     * @return bool
     */
    public function hasCountry(): bool
    {
        return $this->country instanceof CountryInterface;
    }
}
