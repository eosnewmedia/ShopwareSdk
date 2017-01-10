<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Nicklas Reincke <reincke@eosnewmedia.de>
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Detail implements DetailInterface
{

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id")
     */
    private $id;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("articleId")
     */
    private $articleId;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("unitId")
     */
    private $unitId;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("number")
     */
    private $number;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("supplierNumber")
     */
    private $supplierNumber;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("kind")
     */
    private $kind;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("additionalText")
     */
    private $additionalText;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("active")
     */
    private $active;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("inStock")
     */
    private $inStock;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("weight")
     */
    private $weight;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("width")
     */
    private $width;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("len")
     */
    private $len;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("height")
     */
    private $height;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ean")
     */
    private $ean;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("position")
     */
    private $position;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("minPurchase")
     */
    private $minPurchase;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("purchaseSteps")
     */
    private $purchaseSteps;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("maxPurchase")
     */
    private $maxPurchase;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("purchaseUnit")
     */
    private $purchaseUnit;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("referenceUnit")
     */
    private $referenceUnit;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("packUnit")
     */
    private $packUnit;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("shippingFree")
     */
    private $shippingFree;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("releaseDate")
     */
    private $releaseDate;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shippingTime")
     */
    private $shippingTime;

    /**
     * @var PriceInterface[]
     * @Serializer\Type("array<Enm\ShopwareSdk\Model\Article\Price>")
     * @Serializer\SerializedName("prices")
     */
    private $prices = [];

    /**
     * @var ConfiguratorOptionInterface[]
     * @Serializer\Type("array<Enm\ShopwareSdk\Model\Article\ConfiguratorOption>")
     * @Serializer\SerializedName("configuratorOptions")
     */
    private $configuratorOptions = [];

    /**
     * @var AttributeInterface
     * @Serializer\Type("Enm\ShopwareSdk\Model\Article\Attribute")
     * @Serializer\SerializedName("attribute")
     */
    private $attribute;

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
        return (int)$this->articleId;
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
        return (int)$this->unitId;
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
        return (string)$this->number;
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
        return (string)$this->supplierNumber;
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
        return (int)$this->kind;
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
        return (string)$this->additionalText;
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
        return (bool)$this->active;
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
        return (int)$this->inStock;
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
        return (string)$this->weight;
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
        return (string)$this->width;
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
        return (string)$this->len;
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
        return (string)$this->height;
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
        return (string)$this->ean;
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
        return (int)$this->position;
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
        return (int)$this->minPurchase;
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
        return (int)$this->purchaseSteps;
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
        return (int)$this->maxPurchase;
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
        return (string)$this->purchaseUnit;
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
        return (string)$this->referenceUnit;
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
        return (string)$this->packUnit;
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
        return (bool)$this->shippingFree;
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
        return (string)$this->releaseDate;
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
        return (string)$this->shippingTime;
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
        return (array)$this->prices;
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
        return (array)$this->configuratorOptions;
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

    /**
     * @return AttributeInterface
     */
    public function getAttribute(): AttributeInterface
    {
        return $this->attribute;
    }

    /**
     * @param AttributeInterface $attribute
     *
     * @return DetailInterface
     */
    public function setAttribute(AttributeInterface $attribute): DetailInterface
    {
        $this->attribute = $attribute;

        return $this;
    }

}
