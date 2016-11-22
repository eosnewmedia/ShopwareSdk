<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Dispatch implements DispatchInterface
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
    private $name;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $type;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $description;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $comment;

    /**
     * @var bool
     * @SerializerType("boolean")
     */
    private $active;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $position;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $calculation;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $surchargeCalculation;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $taxCalculation;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $shippingFree;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $multiShopId;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $customerGroupId;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $bindShippingFree;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $bindTimeFrom;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $bindTimeTo;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $bindInStock;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $bindLastStock;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $bindWeekdayFrom;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $bindWeekdayTo;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $bindWeightFrom;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $bindWeightTo;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $bindPriceFrom;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $bindPriceTo;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $bindSql;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $statusLink;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $calculationSql;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $attribute;

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
     * @return DispatchInterface
     */
    public function setId(int $id): DispatchInterface
    {
        $this->id = $id;

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
     * @return DispatchInterface
     */
    public function setName(string $name): DispatchInterface
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     *
     * @return DispatchInterface
     */
    public function setType(int $type): DispatchInterface
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return DispatchInterface
     */
    public function setDescription(string $description): DispatchInterface
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     *
     * @return DispatchInterface
     */
    public function setComment(string $comment): DispatchInterface
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     *
     * @return DispatchInterface
     */
    public function setActive(bool $active): DispatchInterface
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @param int $position
     *
     * @return DispatchInterface
     */
    public function setPosition(int $position): DispatchInterface
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return int
     */
    public function getCalculation(): int
    {
        return $this->calculation;
    }

    /**
     * @param int $calculation
     *
     * @return DispatchInterface
     */
    public function setCalculation(int $calculation): DispatchInterface
    {
        $this->calculation = $calculation;

        return $this;
    }

    /**
     * @return int
     */
    public function getSurchargeCalculation(): int
    {
        return $this->surchargeCalculation;
    }

    /**
     * @param int $surchargeCalculation
     *
     * @return DispatchInterface
     */
    public function setSurchargeCalculation(int $surchargeCalculation): DispatchInterface
    {
        $this->surchargeCalculation = $surchargeCalculation;

        return $this;
    }

    /**
     * @return int
     */
    public function getTaxCalculation(): int
    {
        return $this->taxCalculation;
    }

    /**
     * @param int $taxCalculation
     *
     * @return DispatchInterface
     */
    public function setTaxCalculation(int $taxCalculation): DispatchInterface
    {
        $this->taxCalculation = $taxCalculation;

        return $this;
    }

    /**
     * @return string
     */
    public function getShippingFree(): string
    {
        return $this->shippingFree;
    }

    /**
     * @param string $shippingFree
     *
     * @return DispatchInterface
     */
    public function setShippingFree(string $shippingFree): DispatchInterface
    {
        $this->shippingFree = $shippingFree;

        return $this;
    }

    /**
     * @return int
     */
    public function getMultiShopId(): int
    {
        return $this->multiShopId;
    }

    /**
     * @param int $multiShopId
     *
     * @return DispatchInterface
     */
    public function setMultiShopId(int $multiShopId): DispatchInterface
    {
        $this->multiShopId = $multiShopId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerGroupId(): string
    {
        return $this->customerGroupId;
    }

    /**
     * @param string $customerGroupId
     *
     * @return DispatchInterface
     */
    public function setCustomerGroupId(string $customerGroupId): DispatchInterface
    {
        $this->customerGroupId = $customerGroupId;

        return $this;
    }

    /**
     * @return int
     */
    public function getBindShippingFree(): int
    {
        return $this->bindShippingFree;
    }

    /**
     * @param int $bindShippingFree
     *
     * @return DispatchInterface
     */
    public function setBindShippingFree(int $bindShippingFree): DispatchInterface
    {
        $this->bindShippingFree = $bindShippingFree;

        return $this;
    }

    /**
     * @return string
     */
    public function getBindTimeFrom(): string
    {
        return $this->bindTimeFrom;
    }

    /**
     * @param string $bindTimeFrom
     *
     * @return DispatchInterface
     */
    public function setBindTimeFrom(string $bindTimeFrom): DispatchInterface
    {
        $this->bindTimeFrom = $bindTimeFrom;

        return $this;
    }

    /**
     * @return string
     */
    public function getBindTimeTo(): string
    {
        return $this->bindTimeTo;
    }

    /**
     * @param string $bindTimeTo
     *
     * @return DispatchInterface
     */
    public function setBindTimeTo(string $bindTimeTo): DispatchInterface
    {
        $this->bindTimeTo = $bindTimeTo;

        return $this;
    }

    /**
     * @return string
     */
    public function getBindInStock(): string
    {
        return $this->bindInStock;
    }

    /**
     * @param string $bindInStock
     *
     * @return DispatchInterface
     */
    public function setBindInStock(string $bindInStock): DispatchInterface
    {
        $this->bindInStock = $bindInStock;

        return $this;
    }

    /**
     * @return int
     */
    public function getBindLastStock(): int
    {
        return $this->bindLastStock;
    }

    /**
     * @param int $bindLastStock
     *
     * @return DispatchInterface
     */
    public function setBindLastStock(int $bindLastStock): DispatchInterface
    {
        $this->bindLastStock = $bindLastStock;

        return $this;
    }

    /**
     * @return string
     */
    public function getBindWeekdayFrom(): string
    {
        return $this->bindWeekdayFrom;
    }

    /**
     * @param string $bindWeekdayFrom
     *
     * @return DispatchInterface
     */
    public function setBindWeekdayFrom(string $bindWeekdayFrom): DispatchInterface
    {
        $this->bindWeekdayFrom = $bindWeekdayFrom;

        return $this;
    }

    /**
     * @return string
     */
    public function getBindWeekdayTo(): string
    {
        return $this->bindWeekdayTo;
    }

    /**
     * @param string $bindWeekdayTo
     *
     * @return DispatchInterface
     */
    public function setBindWeekdayTo(string $bindWeekdayTo): DispatchInterface
    {
        $this->bindWeekdayTo = $bindWeekdayTo;

        return $this;
    }

    /**
     * @return string
     */
    public function getBindWeightFrom(): string
    {
        return $this->bindWeightFrom;
    }

    /**
     * @param string $bindWeightFrom
     *
     * @return DispatchInterface
     */
    public function setBindWeightFrom(string $bindWeightFrom): DispatchInterface
    {
        $this->bindWeightFrom = $bindWeightFrom;

        return $this;
    }

    /**
     * @return string
     */
    public function getBindWeightTo(): string
    {
        return $this->bindWeightTo;
    }

    /**
     * @param string $bindWeightTo
     *
     * @return DispatchInterface
     */
    public function setBindWeightTo(string $bindWeightTo): DispatchInterface
    {
        $this->bindWeightTo = $bindWeightTo;

        return $this;
    }

    /**
     * @return string
     */
    public function getBindPriceFrom(): string
    {
        return $this->bindPriceFrom;
    }

    /**
     * @param string $bindPriceFrom
     *
     * @return DispatchInterface
     */
    public function setBindPriceFrom(string $bindPriceFrom): DispatchInterface
    {
        $this->bindPriceFrom = $bindPriceFrom;

        return $this;
    }

    /**
     * @return string
     */
    public function getBindPriceTo(): string
    {
        return $this->bindPriceTo;
    }

    /**
     * @param string $bindPriceTo
     *
     * @return DispatchInterface
     */
    public function setBindPriceTo(string $bindPriceTo): DispatchInterface
    {
        $this->bindPriceTo = $bindPriceTo;

        return $this;
    }

    /**
     * @return string
     */
    public function getBindSql(): string
    {
        return $this->bindSql;
    }

    /**
     * @param string $bindSql
     *
     * @return DispatchInterface
     */
    public function setBindSql(string $bindSql): DispatchInterface
    {
        $this->bindSql = $bindSql;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusLink(): string
    {
        return $this->statusLink;
    }

    /**
     * @param string $statusLink
     *
     * @return DispatchInterface
     */
    public function setStatusLink(string $statusLink): DispatchInterface
    {
        $this->statusLink = $statusLink;

        return $this;
    }

    /**
     * @return string
     */
    public function getCalculationSql(): string
    {
        return $this->calculationSql;
    }

    /**
     * @param string $calculationSql
     *
     * @return DispatchInterface
     */
    public function setCalculationSql(string $calculationSql): DispatchInterface
    {
        $this->calculationSql = $calculationSql;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttribute(): string
    {
        return $this->attribute;
    }

    /**
     * @param string $attribute
     *
     * @return DispatchInterface
     */
    public function setAttribute(string $attribute): DispatchInterface
    {
        $this->attribute = $attribute;

        return $this;
    }
}
