<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class OrderDetail implements OrderDetailInterface
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $orderId;

    /**
     * @var int
     */
    private $articleId;

    /**
     * @var int
     */
    private $taxId;

    /**
     * @var int
     */
    private $taxRate;

    /**
     * @var int
     */
    private $statusId;

    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $articleNumber;

    /**
     * @var string
     */
    private $price;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var string
     */
    private $articleName;

    /**
     * @var int
     */
    private $shipped;

    /**
     * @var int
     */
    private $shippedGroup;

    /**
     * Date and time formatted in ISO8601 format.
     *
     * @var string
     */
    private $releaseDate;

    /**
     * @var int
     */
    private $mode;

    /**
     * @var int
     */
    private $esdArticle;

    /**
     * @var string
     */
    private $config;

    /**
     * @var string
     */
    private $ean;

    /**
     * @var string
     */
    private $unit;

    /**
     * @var string
     */
    private $packUnit;

    /**
     * Attribute is not needed
     */

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
     * @return OrderDetailInterface
     */
    public function setId(int $id): OrderDetailInterface
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     *
     * @return OrderDetailInterface
     */
    public function setOrderId(int $orderId): OrderDetailInterface
    {
        $this->orderId = $orderId;

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
     * @return OrderDetailInterface
     */
    public function setArticleId(int $articleId): OrderDetailInterface
    {
        $this->articleId = $articleId;

        return $this;
    }

    /**
     * @return int
     */
    public function getTaxId(): int
    {
        return $this->taxId;
    }

    /**
     * @param int $taxId
     *
     * @return OrderDetailInterface
     */
    public function setTaxId(int $taxId): OrderDetailInterface
    {
        $this->taxId = $taxId;

        return $this;
    }

    /**
     * @return int
     */
    public function getTaxRate(): int
    {
        return $this->taxRate;
    }

    /**
     * @param int $taxRate
     *
     * @return OrderDetailInterface
     */
    public function setTaxRate(int $taxRate): OrderDetailInterface
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * @return int
     */
    public function getStatusId(): int
    {
        return $this->statusId;
    }

    /**
     * @param int $statusId
     *
     * @return OrderDetailInterface
     */
    public function setStatusId(int $statusId): OrderDetailInterface
    {
        $this->statusId = $statusId;

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
     * @return OrderDetailInterface
     */
    public function setNumber(string $number): OrderDetailInterface
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return string
     */
    public function getArticleNumber(): string
    {
        return $this->articleNumber;
    }

    /**
     * @param string $articleNumber
     *
     * @return OrderDetailInterface
     */
    public function setArticleNumber(string $articleNumber): OrderDetailInterface
    {
        $this->articleNumber = $articleNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @param string $price
     *
     * @return OrderDetailInterface
     */
    public function setPrice(string $price): OrderDetailInterface
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     *
     * @return OrderDetailInterface
     */
    public function setQuantity(int $quantity): OrderDetailInterface
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return string
     */
    public function getArticleName(): string
    {
        return $this->articleName;
    }

    /**
     * @param string $articleName
     *
     * @return OrderDetailInterface
     */
    public function setArticleName(string $articleName): OrderDetailInterface
    {
        $this->articleName = $articleName;

        return $this;
    }

    /**
     * @return int
     */
    public function getShipped(): int
    {
        return $this->shipped;
    }

    /**
     * @param int $shipped
     *
     * @return OrderDetailInterface
     */
    public function setShipped(int $shipped): OrderDetailInterface
    {
        $this->shipped = $shipped;

        return $this;
    }

    /**
     * @return int
     */
    public function getShippedGroup(): int
    {
        return $this->shippedGroup;
    }

    /**
     * @param int $shippedGroup
     *
     * @return OrderDetailInterface
     */
    public function setShippedGroup(int $shippedGroup): OrderDetailInterface
    {
        $this->shippedGroup = $shippedGroup;

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
     * @return OrderDetailInterface
     */
    public function setReleaseDate(string $releaseDate): OrderDetailInterface
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * @return int
     */
    public function getMode(): int
    {
        return $this->mode;
    }

    /**
     * @param int $mode
     *
     * @return OrderDetailInterface
     */
    public function setMode(int $mode): OrderDetailInterface
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * @return int
     */
    public function getEsdArticle(): int
    {
        return $this->esdArticle;
    }

    /**
     * @param int $esdArticle
     *
     * @return OrderDetailInterface
     */
    public function setEsdArticle(int $esdArticle): OrderDetailInterface
    {
        $this->esdArticle = $esdArticle;

        return $this;
    }

    /**
     * @return string
     */
    public function getConfig(): string
    {
        return $this->config;
    }

    /**
     * @param string $config
     *
     * @return OrderDetailInterface
     */
    public function setConfig(string $config): OrderDetailInterface
    {
        $this->config = $config;

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
     * @return OrderDetailInterface
     */
    public function setEan(string $ean): OrderDetailInterface
    {
        $this->ean = $ean;

        return $this;
    }

    /**
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }

    /**
     * @param string $unit
     *
     * @return OrderDetailInterface
     */
    public function setUnit(string $unit): OrderDetailInterface
    {
        $this->unit = $unit;

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
     * @return OrderDetailInterface
     */
    public function setPackUnit(string $packUnit): OrderDetailInterface
    {
        $this->packUnit = $packUnit;

        return $this;
    }
}
