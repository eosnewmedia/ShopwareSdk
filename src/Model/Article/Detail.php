<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

/**
 * @author Nicklas Reincke <reincke@eosnewmedia.de>
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Detail implements DetailInterface
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
    private $articleId;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $unitId;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $number;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $supplierNumber;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $kind;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $additionalText;

    /**
     * @var bool
     * @SerializerType("boolean")
     */
    private $active;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $inStock;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $weight;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $width;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $len;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $height;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $ean;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $position;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $minPurchase;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $purchaseSteps;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $maxPurchase;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $purchaseUnit;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $referenceUnit;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $packUnit;

    /**
     * @var bool
     * @SerializerType("boolean")
     */
    private $shippingFree;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $releaseDate;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $shippingTime;

    /**
     * @var PriceInterface[]
     */
    private $prices;

    /**
     * @var ConfiguratorOptionInterface[]
     */
    private $configuratorOptions;

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
     * @return DetailInterface
     */
    public function setId(int $id): DetailInterface
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getArticleId(): int
    {
        return $this->articleId;
    }

    /**
     * @param int $articleId
     *
     * @return DetailInterface
     */
    public function setArticleId(int $articleId): DetailInterface
    {
        $this->articleId = $articleId;

        return $this;
    }

    /**
     * @return int
     */
    public function getUnitId(): int
    {
        return $this->unitId;
    }

    /**
     * @param int $unitId
     *
     * @return DetailInterface
     */
    public function setUnitId(int $unitId): DetailInterface
    {
        $this->unitId = $unitId;

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
     * @return DetailInterface
     */
    public function setNumber(string $number): DetailInterface
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return string
     */
    public function getSupplierNumber(): string
    {
        return $this->supplierNumber;
    }

    /**
     * @param string $supplierNumber
     *
     * @return DetailInterface
     */
    public function setSupplierNumber(string $supplierNumber): DetailInterface
    {
        $this->supplierNumber = $supplierNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getKind(): int
    {
        return $this->kind;
    }

    /**
     * @param int $kind
     *
     * @return DetailInterface
     */
    public function setKind(int $kind): DetailInterface
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalText(): string
    {
        return $this->additionalText;
    }

    /**
     * @param string $additionalText
     *
     * @return DetailInterface
     */
    public function setAdditionalText(string $additionalText): DetailInterface
    {
        $this->additionalText = $additionalText;

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
     * @return DetailInterface
     */
    public function setActive(bool $active): DetailInterface
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return int
     */
    public function getInStock(): int
    {
        return $this->inStock;
    }

    /**
     * @param int $inStock
     *
     * @return DetailInterface
     */
    public function setInStock(int $inStock): DetailInterface
    {
        $this->inStock = $inStock;

        return $this;
    }

    /**
     * @return string
     */
    public function getWeight(): string
    {
        return $this->weight;
    }

    /**
     * @param string $weight
     *
     * @return DetailInterface
     */
    public function setWeight(string $weight): DetailInterface
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return string
     */
    public function getWidth(): string
    {
        return $this->width;
    }

    /**
     * @param string $width
     *
     * @return DetailInterface
     */
    public function setWidth(string $width): DetailInterface
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @return string
     */
    public function getLen(): string
    {
        return $this->len;
    }

    /**
     * @param string $len
     *
     * @return DetailInterface
     */
    public function setLen(string $len): DetailInterface
    {
        $this->len = $len;

        return $this;
    }

    /**
     * @return string
     */
    public function getHeight(): string
    {
        return $this->height;
    }

    /**
     * @param string $height
     *
     * @return DetailInterface
     */
    public function setHeight(string $height): DetailInterface
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @return string
     */
    public function getEan(): string
    {
        return $this->ean;
    }

    /**
     * @param string $ean
     *
     * @return DetailInterface
     */
    public function setEan(string $ean): DetailInterface
    {
        $this->ean = $ean;

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
     * @return DetailInterface
     */
    public function setPosition(int $position): DetailInterface
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return int
     */
    public function getMinPurchase(): int
    {
        return $this->minPurchase;
    }

    /**
     * @param int $minPurchase
     *
     * @return DetailInterface
     */
    public function setMinPurchase(int $minPurchase): DetailInterface
    {
        $this->minPurchase = $minPurchase;

        return $this;
    }

    /**
     * @return int
     */
    public function getPurchaseSteps(): int
    {
        return $this->purchaseSteps;
    }

    /**
     * @param int $purchaseSteps
     *
     * @return DetailInterface
     */
    public function setPurchaseSteps(int $purchaseSteps): DetailInterface
    {
        $this->purchaseSteps = $purchaseSteps;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxPurchase(): int
    {
        return $this->maxPurchase;
    }

    /**
     * @param int $maxPurchase
     *
     * @return DetailInterface
     */
    public function setMaxPurchase(int $maxPurchase): DetailInterface
    {
        $this->maxPurchase = $maxPurchase;

        return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseUnit(): string
    {
        return $this->purchaseUnit;
    }

    /**
     * @param string $purchaseUnit
     *
     * @return DetailInterface
     */
    public function setPurchaseUnit(string $purchaseUnit): DetailInterface
    {
        $this->purchaseUnit = $purchaseUnit;

        return $this;
    }

    /**
     * @return string
     */
    public function getReferenceUnit(): string
    {
        return $this->referenceUnit;
    }

    /**
     * @param string $referenceUnit
     *
     * @return DetailInterface
     */
    public function setReferenceUnit(string $referenceUnit): DetailInterface
    {
        $this->referenceUnit = $referenceUnit;

        return $this;
    }

    /**
     * @return string
     */
    public function getPackUnit(): string
    {
        return $this->packUnit;
    }

    /**
     * @param string $packUnit
     *
     * @return DetailInterface
     */
    public function setPackUnit(string $packUnit): DetailInterface
    {
        $this->packUnit = $packUnit;

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
     * @return DetailInterface
     */
    public function setShippingFree(bool $shippingFree): DetailInterface
    {
        $this->shippingFree = $shippingFree;

        return $this;
    }

    /**
     * @return string
     */
    public function getReleaseDate(): string
    {
        return $this->releaseDate;
    }

    /**
     * @param string $releaseDate
     *
     * @return DetailInterface
     */
    public function setReleaseDate(string $releaseDate): DetailInterface
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getShippingTime(): string
    {
        return $this->shippingTime;
    }

    /**
     * @param string $shippingTime
     *
     * @return DetailInterface
     */
    public function setShippingTime(string $shippingTime): DetailInterface
    {
        $this->shippingTime = $shippingTime;

        return $this;
    }

    /**
     * @return PriceInterface[]
     */
    public function getPrices(): array
    {
        return $this->prices;
    }

    /**
     * @param PriceInterface[] $prices
     *
     * @return DetailInterface
     */
    public function setPrices(array $prices): DetailInterface
    {
        $this->prices = $prices;

        return $this;
    }

    /**
     * @return ConfiguratorOptionInterface[]
     */
    public function getConfiguratorOptions(): array
    {
        return $this->configuratorOptions;
    }

    /**
     * @param ConfiguratorOptionInterface[] $configuratorOptions
     *
     * @return DetailInterface
     */
    public function setConfiguratorOptions(array $configuratorOptions): DetailInterface
    {
        $this->configuratorOptions = $configuratorOptions;

        return $this;
    }
}
