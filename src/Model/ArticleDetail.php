<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model;

/**
 * @author Nicklas Reincke <reincke@eosnewmedia.de>
 */
class ArticleDetail implements ArticleDetailInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $articleId;

    /**
     * @var int
     */
    private $unitId;

    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $supplierNumber;

    /**
     * @var int
     */
    private $kind;

    /**
     * @var string
     */
    private $additionalText;

    /**
     * @var bool
     */
    private $active;

    /**
     * @var int
     */
    private $inStock;

    /**
     * @var string
     */
    private $weight;

    /**
     * @var string
     */
    private $width;

    /**
     * @var string
     */
    private $len;

    /**
     * @var string
     */
    private $height;

    /**
     * @var string
     */
    private $ean;

    /**
     * @var int
     */
    private $position;

    /**
     * @var int
     */
    private $minPurchase;

    /**
     * @var int
     */
    private $purchaseSteps;

    /**
     * @var int
     */
    private $maxPurchase;

    /**
     * @var string
     */
    private $purchaseUnit;

    /**
     * @var string
     */
    private $referenceUnit;

    /**
     * @var string
     */
    private $packUnit;

    /**
     * @var bool
     */
    private $shippingFree;

    /**
     * @var string
     */
    private $releaseDate;

    /**
     * @var string
     */
    private $shippingTime;

    /**
     * @var ArticlePriceInterface[]
     */
    private $prices;

    /**
     * @var ArticleConfiguratorOptionInterface[]
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
     * @return ArticleDetailInterface
     */
    public function setId(int $id): ArticleDetailInterface
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
     * @return ArticleDetailInterface
     */
    public function setArticleId(int $articleId): ArticleDetailInterface
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
     * @return ArticleDetailInterface
     */
    public function setUnitId(int $unitId): ArticleDetailInterface
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
     * @return ArticleDetailInterface
     */
    public function setNumber(string $number): ArticleDetailInterface
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
     * @return ArticleDetailInterface
     */
    public function setSupplierNumber(string $supplierNumber): ArticleDetailInterface
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
     * @return ArticleDetailInterface
     */
    public function setKind(int $kind): ArticleDetailInterface
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
     * @return ArticleDetailInterface
     */
    public function setAdditionalText(string $additionalText): ArticleDetailInterface
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
     * @return ArticleDetailInterface
     */
    public function setActive(bool $active): ArticleDetailInterface
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
     * @return ArticleDetailInterface
     */
    public function setInStock(int $inStock): ArticleDetailInterface
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
     * @return ArticleDetailInterface
     */
    public function setWeight(string $weight): ArticleDetailInterface
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
     * @return ArticleDetailInterface
     */
    public function setWidth(string $width): ArticleDetailInterface
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
     * @return ArticleDetailInterface
     */
    public function setLen(string $len): ArticleDetailInterface
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
     * @return ArticleDetailInterface
     */
    public function setHeight(string $height): ArticleDetailInterface
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
     * @return ArticleDetailInterface
     */
    public function setEan(string $ean): ArticleDetailInterface
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
     * @return ArticleDetailInterface
     */
    public function setPosition(int $position): ArticleDetailInterface
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
     * @return ArticleDetailInterface
     */
    public function setMinPurchase(int $minPurchase): ArticleDetailInterface
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
     * @return ArticleDetailInterface
     */
    public function setPurchaseSteps(int $purchaseSteps): ArticleDetailInterface
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
     * @return ArticleDetailInterface
     */
    public function setMaxPurchase(int $maxPurchase): ArticleDetailInterface
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
     * @return ArticleDetailInterface
     */
    public function setPurchaseUnit(string $purchaseUnit): ArticleDetailInterface
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
     * @return ArticleDetailInterface
     */
    public function setReferenceUnit(string $referenceUnit): ArticleDetailInterface
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
     * @return ArticleDetailInterface
     */
    public function setPackUnit(string $packUnit): ArticleDetailInterface
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
     * @return ArticleDetailInterface
     */
    public function setShippingFree(bool $shippingFree): ArticleDetailInterface
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
     * @return ArticleDetailInterface
     */
    public function setReleaseDate(string $releaseDate): ArticleDetailInterface
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
     * @return ArticleDetailInterface
     */
    public function setShippingTime(string $shippingTime): ArticleDetailInterface
    {
        $this->shippingTime = $shippingTime;

        return $this;
    }

    /**
     * @return ArticlePriceInterface[]
     */
    public function getPrices(): array
    {
        return $this->prices;
    }

    /**
     * @param ArticlePriceInterface[] $prices
     *
     * @return ArticleDetailInterface
     */
    public function setPrices(array $prices): ArticleDetailInterface
    {
        $this->prices = $prices;

        return $this;
    }

    /**
     * @return ArticleConfiguratorOptionInterface[]
     */
    public function getConfiguratorOptions(): array
    {
        return $this->configuratorOptions;
    }

    /**
     * @param ArticleConfiguratorOptionInterface[] $configuratorOptions
     *
     * @return ArticleDetailInterface
     */
    public function setConfiguratorOptions(array $configuratorOptions): ArticleDetailInterface
    {
        $this->configuratorOptions = $configuratorOptions;

        return $this;
    }

}