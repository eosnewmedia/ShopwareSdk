<?php
namespace Enm\ShopwareSdk\Model\Order;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface CountryInterface
{

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return CountryInterface
     */
    public function setId(int $id) : CountryInterface;

    /**
     * @return string
     */
    public function getName() : string;

    /**
     * @param string $name
     *
     * @return CountryInterface
     */
    public function setName(string $name) : CountryInterface;

    /**
     * @return string
     */
    public function getIso() : string;

    /**
     * @param string $iso
     *
     * @return CountryInterface
     */
    public function setIso(string $iso) : CountryInterface;

    /**
     * @return string
     */
    public function getIsoName() : string;

    /**
     * @param string $isoName
     *
     * @return CountryInterface
     */
    public function setIsoName(string $isoName) : CountryInterface;

    /**
     * @return int
     */
    public function getPosition() : int;

    /**
     * @param int $position
     *
     * @return CountryInterface
     */
    public function setPosition(int $position) : CountryInterface;

    /**
     * @return string
     */
    public function getDescription() : string;

    /**
     * @param string $description
     *
     * @return CountryInterface
     */
    public function setDescription(string $description) : CountryInterface;

    /**
     * @return boolean
     */
    public function isShippingFree() : bool;

    /**
     * @param boolean $shippingFree
     *
     * @return CountryInterface
     */
    public function setShippingFree(bool $shippingFree) : CountryInterface;

    /**
     * @return int
     */
    public function getTaxFree() : int;

    /**
     * @param int $taxFree
     *
     * @return CountryInterface
     */
    public function setTaxFree(int $taxFree) : CountryInterface;

    /**
     * @return int
     */
    public function getTaxFreeUstId() : int;

    /**
     * @param int $taxFreeUstId
     *
     * @return CountryInterface
     */
    public function setTaxFreeUstId(int $taxFreeUstId) : CountryInterface;

    /**
     * @return int
     */
    public function getTaxFreeUstIdChecked() : int;

    /**
     * @param int $taxFreeUstIdChecked
     *
     * @return CountryInterface
     */
    public function setTaxFreeUstIdChecked(int $taxFreeUstIdChecked) : CountryInterface;

    /**
     * @return boolean
     */
    public function isActive() : bool;

    /**
     * @param boolean $active
     *
     * @return CountryInterface
     */
    public function setActive(bool $active) : CountryInterface;

    /**
     * @return string
     */
    public function getIso3() : string;

    /**
     * @param string $iso3
     *
     * @return CountryInterface
     */
    public function setIso3(string $iso3) : CountryInterface;

    /**
     * @return boolean
     */
    public function isDisplayStateInRegistration() : bool;

    /**
     * @param boolean $displayStateInRegistration
     *
     * @return CountryInterface
     */
    public function setDisplayStateInRegistration(bool $displayStateInRegistration) : CountryInterface;

    /**
     * @return boolean
     */
    public function isForceStateInRegistration() : bool;

    /**
     * @param boolean $forceStateInRegistration
     *
     * @return CountryInterface
     */
    public function setForceStateInRegistration(bool $forceStateInRegistration) : CountryInterface;

    /**
     * @return int
     */
    public function getAreaId() : int;

    /**
     * @param int $areaId
     *
     * @return CountryInterface
     */
    public function setAreaId(int $areaId) : CountryInterface;
}
