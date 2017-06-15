<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 * @author Nicklas Reincke <reincke@eosnewmedia.de>
 */
class Price implements PriceInterface
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
     * @Serializer\SerializedName("articleDetailsId")
     */
    private $articleDetailsId;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("customerGroupKey")
     */
    private $customerGroupKey;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("from")
     */
    private $from;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("to")
     */
    private $to;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("price")
     */
    private $price;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("pseudoPrice")
     */
    private $pseudoPrice;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("basePrice")
     */
    private $basePrice;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("percent")
     */
    private $percent;

    /**
     * @var CustomerGroupInterface
     * @Serializer\Type("Enm\ShopwareSdk\Model\Article\CustomerGroup")
     * @Serializer\SerializedName("customerGroup")
     */
    private $customerGroup;

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
     * @return PriceInterface
     */
    public function setId(int $id): PriceInterface
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
     * @return PriceInterface
     */
    public function setArticleId(int $articleId): PriceInterface
    {
        $this->articleId = $articleId;

        return $this;
    }

    /**
     * @return int
     */
    public function getArticleDetailsId(): int
    {
        return (int)$this->articleDetailsId;
    }

    /**
     * @param int $articleDetailsId
     *
     * @return PriceInterface
     */
    public function setArticleDetailsId(int $articleDetailsId): PriceInterface
    {
        $this->articleDetailsId = $articleDetailsId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerGroupKey(): string
    {
        return (string)$this->customerGroupKey;
    }

    /**
     * @param string $customerGroupKey
     *
     * @return PriceInterface
     */
    public function setCustomerGroupKey(string $customerGroupKey): PriceInterface
    {
        $this->customerGroupKey = $customerGroupKey;

        return $this;
    }

    /**
     * @return int
     */
    public function getFrom(): int
    {
        return (int)$this->from;
    }

    /**
     * @param int $from
     *
     * @return PriceInterface
     */
    public function setFrom(int $from): PriceInterface
    {
        $this->from = $from;

        return $this;
    }

    /**
     * @return string
     */
    public function getTo(): string
    {
        return (string)$this->to;
    }

    /**
     * @param string $to
     *
     * @return PriceInterface
     */
    public function setTo(string $to): PriceInterface
    {
        $this->to = $to;

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
     * @return PriceInterface
     */
    public function setPrice(string $price): PriceInterface
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return string
     */
    public function getPseudoPrice(): string
    {
        return (string)$this->pseudoPrice;
    }

    /**
     * @param string $pseudoPrice
     *
     * @return PriceInterface
     */
    public function setPseudoPrice(string $pseudoPrice): PriceInterface
    {
        $this->pseudoPrice = $pseudoPrice;

        return $this;
    }

    /**
     * @return string
     */
    public function getBasePrice(): string
    {
        return (string)$this->basePrice;
    }

    /**
     * @param string $basePrice
     *
     * @return PriceInterface
     */
    public function setBasePrice(string $basePrice): PriceInterface
    {
        $this->basePrice = $basePrice;

        return $this;
    }

    /**
     * @return int
     */
    public function getPercent(): int
    {
        return (int)$this->percent;
    }

    /**
     * @param int $percent
     *
     * @return PriceInterface
     */
    public function setPercent(int $percent): PriceInterface
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * @return CustomerGroupInterface
     */
    public function getCustomerGroup(): CustomerGroupInterface
    {
        return $this->customerGroup;
    }

    /**
     * @return bool
     */
    public function hasCustomerGroup(): bool
    {
        return $this->customerGroup !== null;
    }

    /**
     * @param CustomerGroupInterface $customerGroup
     *
     * @return PriceInterface
     */
    public function setCustomerGroup(CustomerGroupInterface $customerGroup): PriceInterface
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }
}
