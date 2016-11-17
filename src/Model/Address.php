<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model;

/**
 * @author Nicklas Reincke <reincke@eosnewmedia.de>
 */
class Address implements AddressInterface
{
    /**
     * @var int
     */
    private $id;

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
     * @var int
     */
    private $countryId;

    /**
     * @var int
     */
    private $stateId;

    /**
     * @var array
     */
    private $attributes;

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
     * @return AddressInterface
     */
    public function setId(int $id): AddressInterface
    {
        $this->id = $id;

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
     * @return AddressInterface
     */
    public function setCompany(string $company): AddressInterface
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
     * @return AddressInterface
     */
    public function setDepartment(string $department): AddressInterface
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
     * @return AddressInterface
     */
    public function setSalutation(string $salutation): AddressInterface
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
     * @return AddressInterface
     */
    public function setFirstName(string $firstName): AddressInterface
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
     * @return AddressInterface
     */
    public function setLastName(string $lastName): AddressInterface
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
     * @return AddressInterface
     */
    public function setStreet(string $street): AddressInterface
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
     * @return AddressInterface
     */
    public function setZipCode(string $zipCode): AddressInterface
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
     * @return AddressInterface
     */
    public function setCity(string $city): AddressInterface
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
     * @return AddressInterface
     */
    public function setPhone(string $phone): AddressInterface
    {
        $this->phone = $phone;

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
     * @return AddressInterface
     */
    public function setVatId(string $vatId): AddressInterface
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
     * @return AddressInterface
     */
    public function setAdditionalAddressLine1(string $additionalAddressLine1): AddressInterface
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
     * @return AddressInterface
     */
    public function setAdditionalAddressLine2(string $additionalAddressLine2): AddressInterface
    {
        $this->additionalAddressLine2 = $additionalAddressLine2;

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
     * @return AddressInterface
     */
    public function setCountryId(int $countryId): AddressInterface
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
     * @return AddressInterface
     */
    public function setStateId(int $stateId): AddressInterface
    {
        $this->stateId = $stateId;

        return $this;
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param array $attributes
     *
     * @return AddressInterface
     */
    public function setAttributes(array $attributes): AddressInterface
    {
        $this->attributes = $attributes;

        return $this;
    }

}