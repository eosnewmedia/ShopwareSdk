<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Billing implements BillingInterface
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $orderId;

    /**
     * @var int
     */
    private $customerId;

    /**
     * @var int
     */
    private $countryId;

    /**
     * @var int
     */
    private $stateId;

    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $department;

    /**
     * @var string
     */
    private $salutation;

    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $zipCode;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $fax;

    /**
     * @var string
     */
    private $vatId;

    /**
     * @var string
     */
    private $additionalAddressLine1;

    /**
     * @var string
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
     * @return BillingInterface
     */
    public function setId(int $id): BillingInterface
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
     * @return BillingInterface
     */
    public function setOrderId(int $orderId): BillingInterface
    {
        $this->orderId = $orderId;

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
     * @return BillingInterface
     */
    public function setCustomerId(int $customerId): BillingInterface
    {
        $this->customerId = $customerId;

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
     * @return BillingInterface
     */
    public function setCountryId(int $countryId): BillingInterface
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
     * @return BillingInterface
     */
    public function setStateId(int $stateId): BillingInterface
    {
        $this->stateId = $stateId;

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
     * @return BillingInterface
     */
    public function setCompany(string $company): BillingInterface
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
     * @return BillingInterface
     */
    public function setDepartment(string $department): BillingInterface
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
     * @return BillingInterface
     */
    public function setSalutation(string $salutation): BillingInterface
    {
        $this->salutation = $salutation;

        return $this;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @param string $number
     *
     * @return BillingInterface
     */
    public function setNumber(string $number): BillingInterface
    {
        $this->number = $number;

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
     * @return BillingInterface
     */
    public function setFirstName(string $firstName): BillingInterface
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
     * @return BillingInterface
     */
    public function setLastName(string $lastName): BillingInterface
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
     * @return BillingInterface
     */
    public function setStreet(string $street): BillingInterface
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
     * @return BillingInterface
     */
    public function setZipCode(string $zipCode): BillingInterface
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
     * @return BillingInterface
     */
    public function setCity(string $city): BillingInterface
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     *
     * @return BillingInterface
     */
    public function setPhone(string $phone): BillingInterface
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return string
     */
    public function getFax(): string
    {
        return $this->fax;
    }

    /**
     * @param string $fax
     *
     * @return BillingInterface
     */
    public function setFax(string $fax): BillingInterface
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * @return string
     */
    public function getVatId(): string
    {
        return $this->vatId;
    }

    /**
     * @param string $vatId
     *
     * @return BillingInterface
     */
    public function setVatId(string $vatId): BillingInterface
    {
        $this->vatId = $vatId;

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
     * @return BillingInterface
     */
    public function setAdditionalAddressLine1(string $additionalAddressLine1): BillingInterface
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
     * @return BillingInterface
     */
    public function setAdditionalAddressLine2(string $additionalAddressLine2): BillingInterface
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
     * @return BillingInterface
     */
    public function setCountry(CountryInterface $country): BillingInterface
    {
        $this->country = $country;

        return $this;
    }
}
