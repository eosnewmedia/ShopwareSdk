<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model;

/**
 * @author Nicklas Reincke <reincke@eosnewmedia.de>
 */
class Country implements CountryInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $iso;

    /**
     * @var string
     */
    private $isoName;

    /**
     * @var int
     */
    private $position;

    /**
     * @var string
     */
    private $description;

    /**
     * @var bool
     */
    private $shippingFree;

    /**
     * @var bool
     */
    private $taxFree;

    /**
     * @var bool
     */
    private $taxFreeUstId;

    /**
     * @var bool
     */
    private $taxFreeUstIdChecked;

    /**
     * @var bool
     */
    private $active;

    /**
     * @var string
     */
    private $iso3;

    /**
     * @var bool
     */
    private $displayStateInRegistration;

    /**
     * @var bool
     */
    private $forceStateInRegistration;

    /**
     * @var int
     */
    private $areaId;

    /**
     * @var StateInterface[]
     */
    private $states;

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
     * @return CountryInterface
     */
    public function setId(int $id): CountryInterface
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return CountryInterface
     */
    public function setName(string $name): CountryInterface
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getIso(): string
    {
        return $this->iso;
    }

    /**
     * @param string $iso
     *
     * @return CountryInterface
     */
    public function setIso(string $iso): CountryInterface
    {
        $this->iso = $iso;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsoName(): string
    {
        return $this->isoName;
    }

    /**
     * @param string $isoName
     *
     * @return CountryInterface
     */
    public function setIsoName(string $isoName): CountryInterface
    {
        $this->isoName = $isoName;

        return $this;
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @param int $position
     *
     * @return CountryInterface
     */
    public function setPosition(int $position): CountryInterface
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return CountryInterface
     */
    public function setDescription(string $description): CountryInterface
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isShippingFree(): bool
    {
        return $this->shippingFree;
    }

    /**
     * @param boolean $shippingFree
     *
     * @return CountryInterface
     */
    public function setShippingFree(bool $shippingFree): CountryInterface
    {
        $this->shippingFree = $shippingFree;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isTaxFree(): bool
    {
        return $this->taxFree;
    }

    /**
     * @param boolean $taxFree
     *
     * @return CountryInterface
     */
    public function setTaxFree(bool $taxFree): CountryInterface
    {
        $this->taxFree = $taxFree;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isTaxFreeUstId(): bool
    {
        return $this->taxFreeUstId;
    }

    /**
     * @param boolean $taxFreeUstId
     *
     * @return CountryInterface
     */
    public function setTaxFreeUstId(bool $taxFreeUstId): CountryInterface
    {
        $this->taxFreeUstId = $taxFreeUstId;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isTaxFreeUstIdChecked(): bool
    {
        return $this->taxFreeUstIdChecked;
    }

    /**
     * @param boolean $taxFreeUstIdChecked
     *
     * @return CountryInterface
     */
    public function setTaxFreeUstIdChecked(bool $taxFreeUstIdChecked): CountryInterface
    {
        $this->taxFreeUstIdChecked = $taxFreeUstIdChecked;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     *
     * @return CountryInterface
     */
    public function setActive(bool $active): CountryInterface
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return string
     */
    public function getIso3(): string
    {
        return $this->iso3;
    }

    /**
     * @param string $iso3
     *
     * @return CountryInterface
     */
    public function setIso3(string $iso3): CountryInterface
    {
        $this->iso3 = $iso3;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isDisplayStateInRegistration(): bool
    {
        return $this->displayStateInRegistration;
    }

    /**
     * @param boolean $displayStateInRegistration
     *
     * @return CountryInterface
     */
    public function setDisplayStateInRegistration(bool $displayStateInRegistration): CountryInterface
    {
        $this->displayStateInRegistration = $displayStateInRegistration;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isForceStateInRegistration(): bool
    {
        return $this->forceStateInRegistration;
    }

    /**
     * @param boolean $forceStateInRegistration
     *
     * @return CountryInterface
     */
    public function setForceStateInRegistration(bool $forceStateInRegistration): CountryInterface
    {
        $this->forceStateInRegistration = $forceStateInRegistration;

        return $this;
    }

    /**
     * @return int
     */
    public function getAreaId(): int
    {
        return $this->areaId;
    }

    /**
     * @param int $areaId
     *
     * @return CountryInterface
     */
    public function setAreaId(int $areaId): CountryInterface
    {
        $this->areaId = $areaId;

        return $this;
    }

    /**
     * @return StateInterface[]
     */
    public function getStates(): array
    {
        return $this->states;
    }

    /**
     * @param StateInterface[] $states
     *
     * @return CountryInterface
     */
    public function setStates(array $states): CountryInterface
    {
        $this->states = $states;

        return $this;
    }

}
