<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Country implements CountryInterface
{

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $id;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $name;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $iso;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $isoName;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $position;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $description;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    private $shippingFree;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $taxFree;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $taxFreeUstId;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $taxFreeUstIdChecked;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    private $active;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $iso3;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    private $displayStateInRegistration;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    private $forceStateInRegistration;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $areaId;

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
        return (string)$this->name;
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
        return (string)$this->iso;
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
        return (string)$this->isoName;
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
        return (int)$this->position;
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
        return (string)$this->description;
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
        return (bool)$this->shippingFree;
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
     * @return int
     */
    public function getTaxFree(): int
    {
        return (int)$this->taxFree;
    }

    /**
     * @param int $taxFree
     *
     * @return CountryInterface
     */
    public function setTaxFree(int $taxFree): CountryInterface
    {
        $this->taxFree = $taxFree;

        return $this;
    }

    /**
     * @return int
     */
    public function getTaxFreeUstId(): int
    {
        return (int)$this->taxFreeUstId;
    }

    /**
     * @param int $taxFreeUstId
     *
     * @return CountryInterface
     */
    public function setTaxFreeUstId(int $taxFreeUstId): CountryInterface
    {
        $this->taxFreeUstId = $taxFreeUstId;

        return $this;
    }

    /**
     * @return int
     */
    public function getTaxFreeUstIdChecked(): int
    {
        return (int)$this->taxFreeUstIdChecked;
    }

    /**
     * @param int $taxFreeUstIdChecked
     *
     * @return CountryInterface
     */
    public function setTaxFreeUstIdChecked(int $taxFreeUstIdChecked): CountryInterface
    {
        $this->taxFreeUstIdChecked = $taxFreeUstIdChecked;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isActive(): bool
    {
        return (bool)$this->active;
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
        return (string)$this->iso3;
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
        return (bool)$this->displayStateInRegistration;
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
        return (bool)$this->forceStateInRegistration;
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
        return (int)$this->areaId;
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
}
