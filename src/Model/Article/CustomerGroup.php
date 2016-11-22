<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class CustomerGroup implements CustomerGroupInterface
{

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $id;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $key;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $name;

    /**
     * @var bool
     * @SerializerType("boolean")
     */
    private $tax;

    /**
     * @var bool
     * @SerializerType("boolean")
     */
    private $taxInput;

    /**
     * @var bool
     * @SerializerType("boolean")
     */
    private $mode;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $discount;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $minimumOrder;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $minimumOrderSurcharge;

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
     * @return CustomerGroupInterface
     */
    public function setId(int $id): CustomerGroupInterface
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     *
     * @return CustomerGroupInterface
     */
    public function setKey(string $key): CustomerGroupInterface
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return CustomerGroupInterface
     */
    public function setName(string $name): CustomerGroupInterface
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isTax(): bool
    {
        return $this->tax;
    }

    /**
     * @param boolean $tax
     *
     * @return CustomerGroupInterface
     */
    public function setTax(bool $tax): CustomerGroupInterface
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isTaxInput(): bool
    {
        return $this->taxInput;
    }

    /**
     * @param boolean $taxInput
     *
     * @return CustomerGroupInterface
     */
    public function setTaxInput(bool $taxInput): CustomerGroupInterface
    {
        $this->taxInput = $taxInput;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isMode(): bool
    {
        return $this->mode;
    }

    /**
     * @param boolean $mode
     *
     * @return CustomerGroupInterface
     */
    public function setMode(bool $mode): CustomerGroupInterface
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * @return int
     */
    public function getDiscount(): int
    {
        return $this->discount;
    }

    /**
     * @param int $discount
     *
     * @return CustomerGroupInterface
     */
    public function setDiscount(int $discount): CustomerGroupInterface
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * @return int
     */
    public function getMinimumOrder(): int
    {
        return $this->minimumOrder;
    }

    /**
     * @param int $minimumOrder
     *
     * @return CustomerGroupInterface
     */
    public function setMinimumOrder(int $minimumOrder): CustomerGroupInterface
    {
        $this->minimumOrder = $minimumOrder;

        return $this;
    }

    /**
     * @return int
     */
    public function getMinimumOrderSurcharge(): int
    {
        return $this->minimumOrderSurcharge;
    }

    /**
     * @param int $minimumOrderSurcharge
     *
     * @return CustomerGroupInterface
     */
    public function setMinimumOrderSurcharge(int $minimumOrderSurcharge): CustomerGroupInterface
    {
        $this->minimumOrderSurcharge = $minimumOrderSurcharge;

        return $this;
    }
}
