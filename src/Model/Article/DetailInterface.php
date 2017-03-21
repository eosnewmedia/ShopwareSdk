<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

/**
 * @author Nicklas Reincke <reincke@eosnewmedia.de>
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface DetailInterface
{

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return DetailInterface
     */
    public function setId(int $id) : DetailInterface;

    /**
     * @return int
     */
    public function getArticleId() : int;

    /**
     * @param int $articleId
     *
     * @return DetailInterface
     */
    public function setArticleId(int $articleId) : DetailInterface;

    /**
     * @return int
     */
    public function getUnitId() : int;

    /**
     * @param int $unitId
     *
     * @return DetailInterface
     */
    public function setUnitId(int $unitId) : DetailInterface;

    /**
     * @return string
     */
    public function getNumber() : string;

    /**
     * @param string $number
     *
     * @return DetailInterface
     */
    public function setNumber(string $number) : DetailInterface;

    /**
     * @return string
     */
    public function getSupplierNumber() : string;

    /**
     * @param string $supplierNumber
     *
     * @return DetailInterface
     */
    public function setSupplierNumber(string $supplierNumber) : DetailInterface;

    /**
     * @return int
     */
    public function getKind() : int;

    /**
     * @param int $kind
     *
     * @return DetailInterface
     */
    public function setKind(int $kind) : DetailInterface;

    /**
     * @return string
     */
    public function getAdditionalText() : string;

    /**
     * @param string $additionalText
     *
     * @return DetailInterface
     */
    public function setAdditionalText(string $additionalText) : DetailInterface;

    /**
     * @return boolean
     */
    public function isActive() : bool;

    /**
     * @param boolean $active
     *
     * @return DetailInterface
     */
    public function setActive(bool $active) : DetailInterface;

    /**
     * @return int
     */
    public function getInStock() : int;

    /**
     * @param int $inStock
     *
     * @return DetailInterface
     */
    public function setInStock(int $inStock) : DetailInterface;

    /**
     * @return string
     */
    public function getWeight() : string;

    /**
     * @param string $weight
     *
     * @return DetailInterface
     */
    public function setWeight(string $weight) : DetailInterface;

    /**
     * @return string
     */
    public function getWidth() : string;

    /**
     * @param string $width
     *
     * @return DetailInterface
     */
    public function setWidth(string $width) : DetailInterface;

    /**
     * @return string
     */
    public function getLen() : string;

    /**
     * @param string $len
     *
     * @return DetailInterface
     */
    public function setLen(string $len) : DetailInterface;

    /**
     * @return string
     */
    public function getHeight() : string;

    /**
     * @param string $height
     *
     * @return DetailInterface
     */
    public function setHeight(string $height) : DetailInterface;

    /**
     * @return string
     */
    public function getEan() : string;

    /**
     * @param string $ean
     *
     * @return DetailInterface
     */
    public function setEan(string $ean) : DetailInterface;

    /**
     * @return int
     */
    public function getPosition() : int;

    /**
     * @param int $position
     *
     * @return DetailInterface
     */
    public function setPosition(int $position) : DetailInterface;

    /**
     * @return int
     */
    public function getMinPurchase() : int;

    /**
     * @param int $minPurchase
     *
     * @return DetailInterface
     */
    public function setMinPurchase(int $minPurchase) : DetailInterface;

    /**
     * @return int
     */
    public function getPurchaseSteps() : int;

    /**
     * @param int $purchaseSteps
     *
     * @return DetailInterface
     */
    public function setPurchaseSteps(int $purchaseSteps) : DetailInterface;

    /**
     * @return int
     */
    public function getMaxPurchase() : int;

    /**
     * @param int $maxPurchase
     *
     * @return DetailInterface
     */
    public function setMaxPurchase(int $maxPurchase) : DetailInterface;

    /**
     * @return string
     */
    public function getPurchaseUnit() : string;

    /**
     * @param string $purchaseUnit
     *
     * @return DetailInterface
     */
    public function setPurchaseUnit(string $purchaseUnit) : DetailInterface;

    /**
     * @return string
     */
    public function getReferenceUnit() : string;

    /**
     * @param string $referenceUnit
     *
     * @return DetailInterface
     */
    public function setReferenceUnit(string $referenceUnit) : DetailInterface;

    /**
     * @return string
     */
    public function getPackUnit() : string;

    /**
     * @param string $packUnit
     *
     * @return DetailInterface
     */
    public function setPackUnit(string $packUnit) : DetailInterface;

    /**
     * @return boolean
     */
    public function isShippingFree() : bool;

    /**
     * @param boolean $shippingFree
     *
     * @return DetailInterface
     */
    public function setShippingFree(bool $shippingFree) : DetailInterface;

    /**
     * @return string
     */
    public function getReleaseDate() : string;

    /**
     * @param string $releaseDate
     *
     * @return DetailInterface
     */
    public function setReleaseDate(string $releaseDate) : DetailInterface;

    /**
     * @return string
     */
    public function getShippingTime() : string;

    /**
     * @param string $shippingTime
     *
     * @return DetailInterface
     */
    public function setShippingTime(string $shippingTime) : DetailInterface;

    /**
     * @return PriceInterface[]
     */
    public function getPrices() : array;

    /**
     * @param PriceInterface[] $prices
     *
     * @return DetailInterface
     */
    public function setPrices(array $prices) : DetailInterface;

    /**
     * @return ConfiguratorOptionInterface[]
     */
    public function getConfiguratorOptions() : array;

    /**
     * @param ConfiguratorOptionInterface[] $configuratorOptions
     *
     * @return DetailInterface
     */
    public function setConfiguratorOptions(array $configuratorOptions) : DetailInterface;

    /**
     * @return AttributeInterface
     */
    public function getAttribute(): AttributeInterface;

    /**
     * @param AttributeInterface $attribute
     *
     * @return DetailInterface
     */
    public function setAttribute(AttributeInterface $attribute): DetailInterface;
}
