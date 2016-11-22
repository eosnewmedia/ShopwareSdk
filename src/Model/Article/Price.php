<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Price implements PriceInterface
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
    private $articleDetailsId;

    /**
     * @var string
     */
    private $customerGroupKey;

    /**
     * @var int
     */
    private $from;

    /**
     * @var string
     */
    private $to;

    /**
     * @var string
     */
    private $price;

    /**
     * @var int
     */
    private $pseudoPrice;

    /**
     * @var int
     */
    private $basePrice;

    /**
     * @var int
     */
    private $percent;

    /**
     * @var CustomerGroupInterface
     */
    private $customerGroup;

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
        return $this->articleId;
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
        return $this->articleDetailsId;
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
        return $this->customerGroupKey;
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
        return $this->from;
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
        return $this->to;
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
        return $this->price;
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
        return $this->pseudoPrice;
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
        return $this->basePrice;
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
        return $this->percent;
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
