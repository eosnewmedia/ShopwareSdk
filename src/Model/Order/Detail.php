<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

use JMS\Serializer\Annotation as Serializer;

/**
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
     * @Serializer\SerializedName("orderId")
     */
    private $orderId;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("articleId")
     */
    private $articleId;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("taxId")
     */
    private $taxId;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("taxRate")
     */
    private $taxRate;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("statusId")
     */
    private $statusId;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("number")
     */
    private $number;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("articleNumber")
     */
    private $articleNumber;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("price")
     */
    private $price;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("quantity")
     */
    private $quantity;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("articleName")
     */
    private $articleName;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("shipped")
     */
    private $shipped;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("shippedGroup")
     */
    private $shippedGroup;
    
    /**
     * Date and time formatted in ISO8601 format.
     *
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("releaseDate")
     */
    private $releaseDate;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("mode")
     */
    private $mode;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("esdArticle")
     */
    private $esdArticle;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("config")
     */
    private $config;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ean")
     */
    private $ean;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("unit")
     */
    private $unit;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("packUnit")
     */
    private $packUnit;
    
    /**
     * "Attribute" property is not needed
     */
    
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
    public function getOrderId(): int
    {
        return (int)$this->orderId;
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
    public function getTaxId(): int
    {
        return (int)$this->taxId;
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
        return (int)$this->taxRate;
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
        return (int)$this->statusId;
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
    public function getArticleNumber(): string
    {
        return (string)$this->articleNumber;
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
        return (string)$this->price;
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
        return (int)$this->quantity;
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
        return (string)$this->articleName;
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
        return (int)$this->shipped;
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
        return (int)$this->shippedGroup;
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
     * @return int
     */
    public function getMode(): int
    {
        return (int)$this->mode;
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
        return (int)$this->esdArticle;
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
        return (string)$this->config;
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
     * @return string
     */
    public function getUnit(): string
    {
        return (string)$this->unit;
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
}
