<?php
namespace Enm\ShopwareSdk\Model;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface OrderDetailInterface
{

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return OrderDetailInterface
     */
    public function setId(int $id) : OrderDetailInterface;

    /**
     * @return int
     */
    public function getOrderId() : int;

    /**
     * @param int $orderId
     *
     * @return OrderDetailInterface
     */
    public function setOrderId(int $orderId) : OrderDetailInterface;

    /**
     * @return int
     */
    public function getArticleId() : int;

    /**
     * @param int $articleId
     *
     * @return OrderDetailInterface
     */
    public function setArticleId(int $articleId) : OrderDetailInterface;

    /**
     * @return int
     */
    public function getTaxId() : int;

    /**
     * @param int $taxId
     *
     * @return OrderDetailInterface
     */
    public function setTaxId(int $taxId) : OrderDetailInterface;

    /**
     * @return int
     */
    public function getTaxRate() : int;

    /**
     * @param int $taxRate
     *
     * @return OrderDetailInterface
     */
    public function setTaxRate(int $taxRate) : OrderDetailInterface;

    /**
     * @return int
     */
    public function getStatusId() : int;

    /**
     * @param int $statusId
     *
     * @return OrderDetailInterface
     */
    public function setStatusId(int $statusId) : OrderDetailInterface;

    /**
     * @return string
     */
    public function getNumber() : string;

    /**
     * @param string $number
     *
     * @return OrderDetailInterface
     */
    public function setNumber(string $number) : OrderDetailInterface;

    /**
     * @return string
     */
    public function getArticleNumber() : string;

    /**
     * @param string $articleNumber
     *
     * @return OrderDetailInterface
     */
    public function setArticleNumber(string $articleNumber) : OrderDetailInterface;

    /**
     * @return string
     */
    public function getPrice() : string;

    /**
     * @param string $price
     *
     * @return OrderDetailInterface
     */
    public function setPrice(string $price) : OrderDetailInterface;

    /**
     * @return int
     */
    public function getQuantity() : int;

    /**
     * @param int $quantity
     *
     * @return OrderDetailInterface
     */
    public function setQuantity(int $quantity) : OrderDetailInterface;

    /**
     * @return string
     */
    public function getArticleName() : string;

    /**
     * @param string $articleName
     *
     * @return OrderDetailInterface
     */
    public function setArticleName(string $articleName) : OrderDetailInterface;

    /**
     * @return int
     */
    public function getShipped() : int;

    /**
     * @param int $shipped
     *
     * @return OrderDetailInterface
     */
    public function setShipped(int $shipped) : OrderDetailInterface;

    /**
     * @return int
     */
    public function getShippedGroup() : int;

    /**
     * @param int $shippedGroup
     *
     * @return OrderDetailInterface
     */
    public function setShippedGroup(int $shippedGroup) : OrderDetailInterface;

    /**
     * @return string
     */
    public function getReleaseDate() : string;

    /**
     * @param string $releaseDate
     *
     * @return OrderDetailInterface
     */
    public function setReleaseDate(string $releaseDate) : OrderDetailInterface;

    /**
     * @return int
     */
    public function getMode() : int;

    /**
     * @param int $mode
     *
     * @return OrderDetailInterface
     */
    public function setMode(int $mode) : OrderDetailInterface;

    /**
     * @return int
     */
    public function getEsdArticle() : int;

    /**
     * @param int $esdArticle
     *
     * @return OrderDetailInterface
     */
    public function setEsdArticle(int $esdArticle) : OrderDetailInterface;

    /**
     * @return string
     */
    public function getConfig() : string;

    /**
     * @param string $config
     *
     * @return OrderDetailInterface
     */
    public function setConfig(string $config) : OrderDetailInterface;

    /**
     * @return string
     */
    public function getEan() : string;

    /**
     * @param string $ean
     *
     * @return OrderDetailInterface
     */
    public function setEan(string $ean) : OrderDetailInterface;

    /**
     * @return string
     */
    public function getUnit() : string;

    /**
     * @param string $unit
     *
     * @return OrderDetailInterface
     */
    public function setUnit(string $unit) : OrderDetailInterface;

    /**
     * @return string
     */
    public function getPackUnit() : string;

    /**
     * @param string $packUnit
     *
     * @return OrderDetailInterface
     */
    public function setPackUnit(string $packUnit) : OrderDetailInterface;
}