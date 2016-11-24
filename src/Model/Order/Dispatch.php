<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Dispatch implements DispatchInterface
{
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id")
     */
    private $id;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    private $name;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("type")
     */
    private $type;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("description")
     */
    private $description;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("comment")
     */
    private $comment;
    
    /**
     * @var bool
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("active")
     */
    private $active;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("position")
     */
    private $position;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("calculation")
     */
    private $calculation;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("surchargeCalculation")
     */
    private $surchargeCalculation;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("taxCalculation")
     */
    private $taxCalculation;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shippingFree")
     */
    private $shippingFree;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("multiShopId")
     */
    private $multiShopId;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("customerGroupId")
     */
    private $customerGroupId;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("bindShippingFree")
     */
    private $bindShippingFree;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bindTimeFrom")
     */
    private $bindTimeFrom;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bindTimeTo")
     */
    private $bindTimeTo;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bindInStock")
     */
    private $bindInStock;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("bindLastStock")
     */
    private $bindLastStock;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bindWeekdayFrom")
     */
    private $bindWeekdayFrom;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bindWeekdayTo")
     */
    private $bindWeekdayTo;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bindWeightFrom")
     */
    private $bindWeightFrom;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bindWeightTo")
     */
    private $bindWeightTo;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bindPriceFrom")
     */
    private $bindPriceFrom;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bindPriceTo")
     */
    private $bindPriceTo;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bindSql")
     */
    private $bindSql;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("statusLink")
     */
    private $statusLink;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("calculationSql")
     */
    private $calculationSql;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("attribute")
     */
    private $attribute;
    
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
        return (string)$this->name;
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
        return (int)$this->type;
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
        return (string)$this->description;
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
        return (string)$this->comment;
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
        return (bool)$this->active;
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
        return (int)$this->position;
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
        return (int)$this->calculation;
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
        return (int)$this->surchargeCalculation;
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
        return (int)$this->taxCalculation;
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
        return (string)$this->shippingFree;
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
        return (int)$this->multiShopId;
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
        return (string)$this->customerGroupId;
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
        return (int)$this->bindShippingFree;
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
        return (string)$this->bindTimeFrom;
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
        return (string)$this->bindTimeTo;
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
        return (string)$this->bindInStock;
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
        return (int)$this->bindLastStock;
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
        return (string)$this->bindWeekdayFrom;
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
        return (string)$this->bindWeekdayTo;
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
        return (string)$this->bindWeightFrom;
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
        return (string)$this->bindWeightTo;
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
        return (string)$this->bindPriceFrom;
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
        return (string)$this->bindPriceTo;
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
        return (string)$this->bindSql;
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
        return (string)$this->statusLink;
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
        return (string)$this->calculationSql;
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
        return (string)$this->attribute;
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
