<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 * @author Nicklas Reincke <reincke@eosnewmedia.de>
 */
interface AddressInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @param int $id
     *
     * @return AddressInterface
     */
    public function setId(int $id): AddressInterface;

    /**
     * @return string
     */
    public function getCompany(): string;

    /**
     * @param string $company
     *
     * @return AddressInterface
     */
    public function setCompany(string $company): AddressInterface;

    /**
     * @return string
     */
    public function getDepartment(): string;

    /**
     * @param string $department
     *
     * @return AddressInterface
     */
    public function setDepartment(string $department): AddressInterface;

    /**
     * @return string
     */
    public function getSalutation(): string;

    /**
     * @param string $salutation
     *
     * @return AddressInterface
     */
    public function setSalutation(string $salutation): AddressInterface;

    /**
     * @return string
     */
    public function getFirstName(): string;

    /**
     * @param string $firstName
     *
     * @return AddressInterface
     */
    public function setFirstName(string $firstName): AddressInterface;

    /**
     * @return string
     */
    public function getLastName(): string;

    /**
     * @param string $lastName
     *
     * @return AddressInterface
     */
    public function setLastName(string $lastName): AddressInterface;

    /**
     * @return string
     */
    public function getStreet(): string;

    /**
     * @param string $street
     *
     * @return AddressInterface
     */
    public function setStreet(string $street): AddressInterface;

    /**
     * @return string
     */
    public function getZipCode(): string;

    /**
     * @param string $zipCode
     *
     * @return AddressInterface
     */
    public function setZipCode(string $zipCode): AddressInterface;

    /**
     * @return string
     */
    public function getCity(): string;

    /**
     * @param string $city
     *
     * @return AddressInterface
     */
    public function setCity(string $city): AddressInterface;

    /**
     * @return string
     */
    public function getPhone(): string;

    /**
     * @param string $phone
     *
     * @return AddressInterface
     */
    public function setPhone(string $phone): AddressInterface;

    /**
     * @return string
     */
    public function getVatId(): string;

    /**
     * @param string $vatId
     *
     * @return AddressInterface
     */
    public function setVatId(string $vatId): AddressInterface;

    /**
     * @return string
     */
    public function getFirstAdditionalAddressLine(): string;

    /**
     * @param string $firstAdditionalAddressLine
     *
     * @return AddressInterface
     */
    public function setFirstAdditionalAddressLine(string $firstAdditionalAddressLine): AddressInterface;

    /**
     * @return string
     */
    public function getSecondAdditionalAddressLine(): string;

    /**
     * @param string $secondAdditionalAddressLine
     *
     * @return AddressInterface
     */
    public function setSecondAdditionalAddressLine(string $secondAdditionalAddressLine): AddressInterface;

    /**
     * @return int
     */
    public function getCountryId(): int;

    /**
     * @param int $countryId
     *
     * @return AddressInterface
     */
    public function setCountryId(int $countryId): AddressInterface;

    /**
     * @return int
     */
    public function getStateId(): int;

    /**
     * @param int $stateId
     *
     * @return AddressInterface
     */
    public function setStateId(int $stateId): AddressInterface;

    /**
     * @return array
     */
    public function getAttributes(): array;

    /**
     * @param array $attributes
     *
     * @return AddressInterface
     */
    public function setAttributes(array $attributes): AddressInterface;
}
