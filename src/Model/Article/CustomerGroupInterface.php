<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface CustomerGroupInterface
{

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return CustomerGroupInterface
     */
    public function setId(int $id) : CustomerGroupInterface;

    /**
     * @return string
     */
    public function getKey() : string;

    /**
     * @param string $key
     *
     * @return CustomerGroupInterface
     */
    public function setKey(string $key) : CustomerGroupInterface;

    /**
     * @return string
     */
    public function getName() : string;

    /**
     * @param string $name
     *
     * @return CustomerGroupInterface
     */
    public function setName(string $name) : CustomerGroupInterface;

    /**
     * @return boolean
     */
    public function isTax() : bool;

    /**
     * @param boolean $tax
     *
     * @return CustomerGroupInterface
     */
    public function setTax(bool $tax) : CustomerGroupInterface;

    /**
     * @return boolean
     */
    public function isTaxInput() : bool;

    /**
     * @param boolean $taxInput
     *
     * @return CustomerGroupInterface
     */
    public function setTaxInput(bool $taxInput) : CustomerGroupInterface;

    /**
     * @return boolean
     */
    public function isMode() : bool;

    /**
     * @param boolean $mode
     *
     * @return CustomerGroupInterface
     */
    public function setMode(bool $mode) : CustomerGroupInterface;

    /**
     * @return int
     */
    public function getDiscount() : int;

    /**
     * @param int $discount
     *
     * @return CustomerGroupInterface
     */
    public function setDiscount(int $discount) : CustomerGroupInterface;

    /**
     * @return int
     */
    public function getMinimumOrder() : int;

    /**
     * @param int $minimumOrder
     *
     * @return CustomerGroupInterface
     */
    public function setMinimumOrder(int $minimumOrder) : CustomerGroupInterface;

    /**
     * @return int
     */
    public function getMinimumOrderSurcharge() : int;

    /**
     * @param int $minimumOrderSurcharge
     *
     * @return CustomerGroupInterface
     */
    public function setMinimumOrderSurcharge(int $minimumOrderSurcharge) : CustomerGroupInterface;
}
