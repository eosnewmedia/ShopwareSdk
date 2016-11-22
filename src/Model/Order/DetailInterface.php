<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

/**
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
    public function getOrderId() : int;

    /**
     * @param int $orderId
     *
     * @return DetailInterface
     */
    public function setOrderId(int $orderId) : DetailInterface;

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
    public function getTaxId() : int;

    /**
     * @param int $taxId
     *
     * @return DetailInterface
     */
    public function setTaxId(int $taxId) : DetailInterface;

    /**
     * @return int
     */
    public function getTaxRate() : int;

    /**
     * @param int $taxRate
     *
     * @return DetailInterface
     */
    public function setTaxRate(int $taxRate) : DetailInterface;

    /**
     * @return int
     */
    public function getStatusId() : int;

    /**
     * @param int $statusId
     *
     * @return DetailInterface
     */
    public function setStatusId(int $statusId) : DetailInterface;

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
    public function getArticleNumber() : string;

    /**
     * @param string $articleNumber
     *
     * @return DetailInterface
     */
    public function setArticleNumber(string $articleNumber) : DetailInterface;

    /**
     * @return string
     */
    public function getPrice() : string;

    /**
     * @param string $price
     *
     * @return DetailInterface
     */
    public function setPrice(string $price) : DetailInterface;

    /**
     * @return int
     */
    public function getQuantity() : int;

    /**
     * @param int $quantity
     *
     * @return DetailInterface
     */
    public function setQuantity(int $quantity) : DetailInterface;

    /**
     * @return string
     */
    public function getArticleName() : string;

    /**
     * @param string $articleName
     *
     * @return DetailInterface
     */
    public function setArticleName(string $articleName) : DetailInterface;

    /**
     * @return int
     */
    public function getShipped() : int;

    /**
     * @param int $shipped
     *
     * @return DetailInterface
     */
    public function setShipped(int $shipped) : DetailInterface;

    /**
     * @return int
     */
    public function getShippedGroup() : int;

    /**
     * @param int $shippedGroup
     *
     * @return DetailInterface
     */
    public function setShippedGroup(int $shippedGroup) : DetailInterface;

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
     * @return int
     */
    public function getMode() : int;

    /**
     * @param int $mode
     *
     * @return DetailInterface
     */
    public function setMode(int $mode) : DetailInterface;

    /**
     * @return int
     */
    public function getEsdArticle() : int;

    /**
     * @param int $esdArticle
     *
     * @return DetailInterface
     */
    public function setEsdArticle(int $esdArticle) : DetailInterface;

    /**
     * @return string
     */
    public function getConfig() : string;

    /**
     * @param string $config
     *
     * @return DetailInterface
     */
    public function setConfig(string $config) : DetailInterface;

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
     * @return string
     */
    public function getUnit() : string;

    /**
     * @param string $unit
     *
     * @return DetailInterface
     */
    public function setUnit(string $unit) : DetailInterface;

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
}
