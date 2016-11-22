<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface ShippingInterface
{

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return ShippingInterface
     */
    public function setId(int $id) : ShippingInterface;

    /**
     * @return int
     */
    public function getOrderId() : int;

    /**
     * @param int $orderId
     *
     * @return ShippingInterface
     */
    public function setOrderId(int $orderId) : ShippingInterface;

    /**
     * @return int
     */
    public function getCountryId() : int;

    /**
     * @param int $countryId
     *
     * @return ShippingInterface
     */
    public function setCountryId(int $countryId) : ShippingInterface;

    /**
     * @return int
     */
    public function getStateId() : int;

    /**
     * @param int $stateId
     *
     * @return ShippingInterface
     */
    public function setStateId(int $stateId) : ShippingInterface;

    /**
     * @return int
     */
    public function getCustomerId() : int;

    /**
     * @param int $customerId
     *
     * @return ShippingInterface
     */
    public function setCustomerId(int $customerId) : ShippingInterface;

    /**
     * @return string
     */
    public function getCompany() : string;

    /**
     * @param string $company
     *
     * @return ShippingInterface
     */
    public function setCompany(string $company) : ShippingInterface;

    /**
     * @return string
     */
    public function getDepartment() : string;

    /**
     * @param string $department
     *
     * @return ShippingInterface
     */
    public function setDepartment(string $department) : ShippingInterface;

    /**
     * @return string
     */
    public function getSalutation() : string;

    /**
     * @param string $salutation
     *
     * @return ShippingInterface
     */
    public function setSalutation(string $salutation) : ShippingInterface;

    /**
     * @return string
     */
    public function getFirstName() : string;

    /**
     * @param string $firstName
     *
     * @return ShippingInterface
     */
    public function setFirstName(string $firstName) : ShippingInterface;

    /**
     * @return string
     */
    public function getLastName() : string;

    /**
     * @param string $lastName
     *
     * @return ShippingInterface
     */
    public function setLastName(string $lastName) : ShippingInterface;

    /**
     * @return string
     */
    public function getStreet() : string;

    /**
     * @param string $street
     *
     * @return ShippingInterface
     */
    public function setStreet(string $street) : ShippingInterface;

    /**
     * @return string
     */
    public function getZipCode() : string;

    /**
     * @param string $zipCode
     *
     * @return ShippingInterface
     */
    public function setZipCode(string $zipCode) : ShippingInterface;

    /**
     * @return string
     */
    public function getCity() : string;

    /**
     * @param string $city
     *
     * @return ShippingInterface
     */
    public function setCity(string $city) : ShippingInterface;

    /**
     * @return string
     */
    public function getAdditionalAddressLine1() : string;

    /**
     * @param string $additionalAddressLine1
     *
     * @return ShippingInterface
     */
    public function setAdditionalAddressLine1(string $additionalAddressLine1) : ShippingInterface;

    /**
     * @return string
     */
    public function getAdditionalAddressLine2() : string;

    /**
     * @param string $additionalAddressLine2
     *
     * @return ShippingInterface
     */
    public function setAdditionalAddressLine2(string $additionalAddressLine2) : ShippingInterface;

    /**
     * @return CountryInterface
     */
    public function getCountry() : CountryInterface;

    /**
     * @param CountryInterface $country
     *
     * @return ShippingInterface
     */
    public function setCountry(CountryInterface $country) : ShippingInterface;
}
