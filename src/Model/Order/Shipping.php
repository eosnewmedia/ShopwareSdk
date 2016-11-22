<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Shipping implements ShippingInterface
{

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $id;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $orderId;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $countryId;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $stateId;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $customerId;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $company;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $department;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $salutation;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $firstName;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $lastName;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $street;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $zipCode;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $city;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $additionalAddressLine1;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $additionalAddressLine2;

    /**
     * @var CountryInterface
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
        return $this->id;
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
        return $this->orderId;
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
        return $this->countryId;
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
        return $this->stateId;
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
        return $this->customerId;
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
        return $this->company;
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
        return $this->department;
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
        return $this->salutation;
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
        return $this->firstName;
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
        return $this->lastName;
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
        return $this->street;
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
        return $this->zipCode;
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
        return $this->city;
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
        return $this->additionalAddressLine1;
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
        return $this->additionalAddressLine2;
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
}
