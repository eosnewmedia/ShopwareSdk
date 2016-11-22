<?<?php
 declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface PriceInterface
{

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return PriceInterface
     */
    public function setId(int $id) : PriceInterface;

    /**
     * @return int
     */
    public function getArticleId() : int;

    /**
     * @param int $articleId
     *
     * @return PriceInterface
     */
    public function setArticleId(int $articleId) : PriceInterface;

    /**
     * @return int
     */
    public function getArticleDetailsId() : int;

    /**
     * @param int $articleDetailsId
     *
     * @return PriceInterface
     */
    public function setArticleDetailsId(int $articleDetailsId) : PriceInterface;

    /**
     * @return string
     */
    public function getCustomerGroupKey() : string;

    /**
     * @param string $customerGroupKey
     *
     * @return PriceInterface
     */
    public function setCustomerGroupKey(string $customerGroupKey) : PriceInterface;

    /**
     * @return int
     */
    public function getFrom() : int;

    /**
     * @param int $from
     *
     * @return PriceInterface
     */
    public function setFrom(int $from) : PriceInterface;

    /**
     * @return string
     */
    public function getTo() : string;

    /**
     * @param string $to
     *
     * @return PriceInterface
     */
    public function setTo(string $to) : PriceInterface;

    /**
     * @return string
     */
    public function getPrice() : string;

    /**
     * @param string $price
     *
     * @return PriceInterface
     */
    public function setPrice(string $price) : PriceInterface;

    /**
     * @return int
     */
    public function getPseudoPrice() : int;

    /**
     * @param int $pseudoPrice
     *
     * @return PriceInterface
     */
    public function setPseudoPrice(int $pseudoPrice) : PriceInterface;

    /**
     * @return int
     */
    public function getBasePrice() : int;

    /**
     * @param int $basePrice
     *
     * @return PriceInterface
     */
    public function setBasePrice(int $basePrice) : PriceInterface;

    /**
     * @return int
     */
    public function getPercent() : int;

    /**
     * @param int $percent
     *
     * @return PriceInterface
     */
    public function setPercent(int $percent) : PriceInterface;

    /**
     * @return CustomerGroupInterface
     */
    public function getCustomerGroup() : CustomerGroupInterface;

    /**
     * @param CustomerGroupInterface $customerGroup
     *
     * @return PriceInterface
     */
    public function setCustomerGroup(CustomerGroupInterface $customerGroup) : PriceInterface;
}
