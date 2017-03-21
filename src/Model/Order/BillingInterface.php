<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface BillingInterface
{

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return BillingInterface
     */
    public function setId(int $id) : BillingInterface;

    /**
     * @return int
     */
    public function getOrderId() : int;

    /**
     * @param int $orderId
     *
     * @return BillingInterface
     */
    public function setOrderId(int $orderId) : BillingInterface;

    /**
     * @return int
     */
    public function getCustomerId() : int;

    /**
     * @param int $customerId
     *
     * @return BillingInterface
     */
    public function setCustomerId(int $customerId) : BillingInterface;

    /**
     * @return int
     */
    public function getCountryId() : int;

    /**
     * @param int $countryId
     *
     * @return BillingInterface
     */
    public function setCountryId(int $countryId) : BillingInterface;

    /**
     * @return int
     */
    public function getStateId() : int;

    /**
     * @param int $stateId
     *
     * @return BillingInterface
     */
    public function setStateId(int $stateId) : BillingInterface;

    /**
     * @return string
     */
    public function getCompany() : string;

    /**
     * @param string $company
     *
     * @return BillingInterface
     */
    public function setCompany(string $company) : BillingInterface;

    /**
     * @return string
     */
    public function getDepartment() : string;

    /**
     * @param string $department
     *
     * @return BillingInterface
     */
    public function setDepartment(string $department) : BillingInterface;

    /**
     * @return string
     */
    public function getSalutation() : string;

    /**
     * @param string $salutation
     *
     * @return BillingInterface
     */
    public function setSalutation(string $salutation) : BillingInterface;

    /**
     * @return string
     */
    public function getNumber() : string;

    /**
     * @param string $number
     *
     * @return BillingInterface
     */
    public function setNumber(string $number) : BillingInterface;

    /**
     * @return string
     */
    public function getFirstName() : string;

    /**
     * @param string $firstName
     *
     * @return BillingInterface
     */
    public function setFirstName(string $firstName) : BillingInterface;

    /**
     * @return string
     */
    public function getLastName() : string;

    /**
     * @param string $lastName
     *
     * @return BillingInterface
     */
    public function setLastName(string $lastName) : BillingInterface;

    /**
     * @return string
     */
    public function getStreet() : string;

    /**
     * @param string $street
     *
     * @return BillingInterface
     */
    public function setStreet(string $street) : BillingInterface;

    /**
     * @return string
     */
    public function getZipCode() : string;

    /**
     * @param string $zipCode
     *
     * @return BillingInterface
     */
    public function setZipCode(string $zipCode) : BillingInterface;

    /**
     * @return string
     */
    public function getCity() : string;

    /**
     * @param string $city
     *
     * @return BillingInterface
     */
    public function setCity(string $city) : BillingInterface;

    /**
     * @return string
     */
    public function getPhone() : string;

    /**
     * @param string $phone
     *
     * @return BillingInterface
     */
    public function setPhone(string $phone) : BillingInterface;

    /**
     * @return string
     */
    public function getFax() : string;

    /**
     * @param string $fax
     *
     * @return BillingInterface
     */
    public function setFax(string $fax) : BillingInterface;

    /**
     * @return string
     */
    public function getVatId() : string;

    /**
     * @param string $vatId
     *
     * @return BillingInterface
     */
    public function setVatId(string $vatId) : BillingInterface;

    /**
     * @return string
     */
    public function getAdditionalAddressLine1() : string;

    /**
     * @param string $additionalAddressLine1
     *
     * @return BillingInterface
     */
    public function setAdditionalAddressLine1(string $additionalAddressLine1) : BillingInterface;

    /**
     * @return string
     */
    public function getAdditionalAddressLine2() : string;

    /**
     * @param string $additionalAddressLine2
     *
     * @return BillingInterface
     */
    public function setAdditionalAddressLine2(string $additionalAddressLine2) : BillingInterface;

    /**
     * @return CountryInterface
     */
    public function getCountry() : CountryInterface;

    /**
     * @param CountryInterface $country
     *
     * @return BillingInterface
     */
    public function setCountry(CountryInterface $country) : BillingInterface;

    /**
     * @return bool
     */
    public function hasCountry() : bool;
}
