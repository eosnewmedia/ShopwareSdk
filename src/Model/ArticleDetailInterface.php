<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model;

/**
 * @author Nicklas Reincke <reincke@eosnewmedia.de>
 */
interface ArticleDetailInterface
{
    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return ArticleDetailInterface
     */
    public function setId(int $id) : ArticleDetailInterface;

    /**
     * @return int
     */
    public function getArticleId() : int;

    /**
     * @param int $articleId
     *
     * @return ArticleDetailInterface
     */
    public function setArticleId(int $articleId) : ArticleDetailInterface;

    /**
     * @return int
     */
    public function getUnitId() : int;

    /**
     * @param int $unitId
     *
     * @return ArticleDetailInterface
     */
    public function setUnitId(int $unitId) : ArticleDetailInterface;

    /**
     * @return string
     */
    public function getNumber() : string;

    /**
     * @param string $number
     *
     * @return ArticleDetailInterface
     */
    public function setNumber(string $number) : ArticleDetailInterface;

    /**
     * @return string
     */
    public function getSupplierNumber() : string;

    /**
     * @param string $supplierNumber
     *
     * @return ArticleDetailInterface
     */
    public function setSupplierNumber(string $supplierNumber) : ArticleDetailInterface;

    /**
     * @return int
     */
    public function getKind() : int;

    /**
     * @param int $kind
     *
     * @return ArticleDetailInterface
     */
    public function setKind(int $kind) : ArticleDetailInterface;

    /**
     * @return string
     */
    public function getAdditionalText() : string;

    /**
     * @param string $additionalText
     *
     * @return ArticleDetailInterface
     */
    public function setAdditionalText(string $additionalText) : ArticleDetailInterface;

    /**
     * @return boolean
     */
    public function isActive() : bool;

    /**
     * @param boolean $active
     *
     * @return ArticleDetailInterface
     */
    public function setActive(bool $active) : ArticleDetailInterface;

    /**
     * @return int
     */
    public function getInStock() : int;

    /**
     * @param int $inStock
     *
     * @return ArticleDetailInterface
     */
    public function setInStock(int $inStock) : ArticleDetailInterface;

    /**
     * @return string
     */
    public function getWeight() : string;

    /**
     * @param string $weight
     *
     * @return ArticleDetailInterface
     */
    public function setWeight(string $weight) : ArticleDetailInterface;

    /**
     * @return string
     */
    public function getWidth() : string;

    /**
     * @param string $width
     *
     * @return ArticleDetailInterface
     */
    public function setWidth(string $width) : ArticleDetailInterface;

    /**
     * @return string
     */
    public function getLen() : string;

    /**
     * @param string $len
     *
     * @return ArticleDetailInterface
     */
    public function setLen(string $len) : ArticleDetailInterface;

    /**
     * @return string
     */
    public function getHeight() : string;

    /**
     * @param string $height
     *
     * @return ArticleDetailInterface
     */
    public function setHeight(string $height) : ArticleDetailInterface;

    /**
     * @return string
     */
    public function getEan() : string;

    /**
     * @param string $ean
     *
     * @return ArticleDetailInterface
     */
    public function setEan(string $ean) : ArticleDetailInterface;

    /**
     * @return int
     */
    public function getPosition() : int;

    /**
     * @param int $position
     *
     * @return ArticleDetailInterface
     */
    public function setPosition(int $position) : ArticleDetailInterface;

    /**
     * @return int
     */
    public function getMinPurchase() : int;

    /**
     * @param int $minPurchase
     *
     * @return ArticleDetailInterface
     */
    public function setMinPurchase(int $minPurchase) : ArticleDetailInterface;

    /**
     * @return int
     */
    public function getPurchaseSteps() : int;

    /**
     * @param int $purchaseSteps
     *
     * @return ArticleDetailInterface
     */
    public function setPurchaseSteps(int $purchaseSteps) : ArticleDetailInterface;

    /**
     * @return int
     */
    public function getMaxPurchase() : int;

    /**
     * @param int $maxPurchase
     *
     * @return ArticleDetailInterface
     */
    public function setMaxPurchase(int $maxPurchase) : ArticleDetailInterface;

    /**
     * @return string
     */
    public function getPurchaseUnit() : string;

    /**
     * @param string $purchaseUnit
     *
     * @return ArticleDetailInterface
     */
    public function setPurchaseUnit(string $purchaseUnit) : ArticleDetailInterface;

    /**
     * @return string
     */
    public function getReferenceUnit() : string;

    /**
     * @param string $referenceUnit
     *
     * @return ArticleDetailInterface
     */
    public function setReferenceUnit(string $referenceUnit) : ArticleDetailInterface;

    /**
     * @return string
     */
    public function getPackUnit() : string;

    /**
     * @param string $packUnit
     *
     * @return ArticleDetailInterface
     */
    public function setPackUnit(string $packUnit) : ArticleDetailInterface;

    /**
     * @return boolean
     */
    public function isShippingFree() : bool;

    /**
     * @param boolean $shippingFree
     *
     * @return ArticleDetailInterface
     */
    public function setShippingFree(bool $shippingFree) : ArticleDetailInterface;

    /**
     * @return string
     */
    public function getReleaseDate() : string;

    /**
     * @param string $releaseDate
     *
     * @return ArticleDetailInterface
     */
    public function setReleaseDate(string $releaseDate) : ArticleDetailInterface;

    /**
     * @return string
     */
    public function getShippingTime() : string;

    /**
     * @param string $shippingTime
     *
     * @return ArticleDetailInterface
     */
    public function setShippingTime(string $shippingTime) : ArticleDetailInterface;

    /**
     * @return ArticlePriceInterface[]
     */
    public function getPrices() : array;

    /**
     * @param ArticlePriceInterface[] $prices
     *
     * @return ArticleDetailInterface
     */
    public function setPrices(array $prices) : ArticleDetailInterface;

    /**
     * @return ArticleConfiguratorOptionInterface[]
     */
    public function getConfiguratorOptions() : array;

    /**
     * @param ArticleConfiguratorOptionInterface[] $configuratorOptions
     *
     * @return ArticleDetailInterface
     */
    public function setConfiguratorOptions(array $configuratorOptions) : ArticleDetailInterface;
}