<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Detail implements DetailInterface
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
    public function getOrderId(): int
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     *
     * @return DetailInterface
     */
    public function setOrderId(int $orderId): DetailInterface
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
    public function getTaxId(): int
    {
        return $this->taxId;
    }

    /**
     * @param int $taxId
     *
     * @return DetailInterface
     */
    public function setTaxId(int $taxId): DetailInterface
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
     * @return DetailInterface
     */
    public function setTaxRate(int $taxRate): DetailInterface
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
     * @return DetailInterface
     */
    public function setStatusId(int $statusId): DetailInterface
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
    public function getArticleNumber(): string
    {
        return $this->articleNumber;
    }

    /**
     * @param string $articleNumber
     *
     * @return DetailInterface
     */
    public function setArticleNumber(string $articleNumber): DetailInterface
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
     * @return DetailInterface
     */
    public function setPrice(string $price): DetailInterface
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
     * @return DetailInterface
     */
    public function setQuantity(int $quantity): DetailInterface
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
     * @return DetailInterface
     */
    public function setArticleName(string $articleName): DetailInterface
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
     * @return DetailInterface
     */
    public function setShipped(int $shipped): DetailInterface
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
     * @return DetailInterface
     */
    public function setShippedGroup(int $shippedGroup): DetailInterface
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
     * @return DetailInterface
     */
    public function setReleaseDate(string $releaseDate): DetailInterface
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
     * @return DetailInterface
     */
    public function setMode(int $mode): DetailInterface
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
     * @return DetailInterface
     */
    public function setEsdArticle(int $esdArticle): DetailInterface
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
     * @return DetailInterface
     */
    public function setConfig(string $config): DetailInterface
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
     * @return DetailInterface
     */
    public function setEan(string $ean): DetailInterface
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
     * @return DetailInterface
     */
    public function setUnit(string $unit): DetailInterface
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
     * @return DetailInterface
     */
    public function setPackUnit(string $packUnit): DetailInterface
    {
        $this->packUnit = $packUnit;

        return $this;
    }
}
