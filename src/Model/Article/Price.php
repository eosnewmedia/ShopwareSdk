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
     */
    private $id;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $articleId;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $articleDetailsId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $customerGroupKey;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $from;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $to;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $price;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $pseudoPrice;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $basePrice;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $percent;

    /**
     * @var CustomerGroupInterface
     * @Serializer\Type("Enm\ShopwareSdk\Model\Article\CustomerGroup")
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
     * @return int
     */
    public function getPseudoPrice(): int
    {
        return (int)$this->pseudoPrice;
    }

    /**
     * @param int $pseudoPrice
     *
     * @return PriceInterface
     */
    public function setPseudoPrice(int $pseudoPrice): PriceInterface
    {
        $this->pseudoPrice = $pseudoPrice;

        return $this;
    }

    /**
     * @return int
     */
    public function getBasePrice(): int
    {
        return (int)$this->basePrice;
    }

    /**
     * @param int $basePrice
     *
     * @return PriceInterface
     */
    public function setBasePrice(int $basePrice): PriceInterface
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
