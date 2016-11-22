<?php
namespace Enm\ShopwareSdk\Model;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface DispatchInterface
{

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return DispatchInterface
     */
    public function setId(int $id) : DispatchInterface;

    /**
     * @return string
     */
    public function getName() : string;

    /**
     * @param string $name
     *
     * @return DispatchInterface
     */
    public function setName(string $name) : DispatchInterface;

    /**
     * @return int
     */
    public function getType() : int;

    /**
     * @param int $type
     *
     * @return DispatchInterface
     */
    public function setType(int $type) : DispatchInterface;

    /**
     * @return string
     */
    public function getDescription() : string;

    /**
     * @param string $description
     *
     * @return DispatchInterface
     */
    public function setDescription(string $description) : DispatchInterface;

    /**
     * @return string
     */
    public function getComment() : string;

    /**
     * @param string $comment
     *
     * @return DispatchInterface
     */
    public function setComment(string $comment) : DispatchInterface;

    /**
     * @return boolean
     */
    public function isActive() : bool;

    /**
     * @param boolean $active
     *
     * @return DispatchInterface
     */
    public function setActive(bool $active) : DispatchInterface;

    /**
     * @return int
     */
    public function getPosition() : int;

    /**
     * @param int $position
     *
     * @return DispatchInterface
     */
    public function setPosition(int $position) : DispatchInterface;

    /**
     * @return int
     */
    public function getCalculation() : int;

    /**
     * @param int $calculation
     *
     * @return DispatchInterface
     */
    public function setCalculation(int $calculation) : DispatchInterface;

    /**
     * @return int
     */
    public function getSurchargeCalculation() : int;

    /**
     * @param int $surchargeCalculation
     *
     * @return DispatchInterface
     */
    public function setSurchargeCalculation(int $surchargeCalculation) : DispatchInterface;

    /**
     * @return int
     */
    public function getTaxCalculation() : int;

    /**
     * @param int $taxCalculation
     *
     * @return DispatchInterface
     */
    public function setTaxCalculation(int $taxCalculation) : DispatchInterface;

    /**
     * @return string
     */
    public function getShippingFree() : string;

    /**
     * @param string $shippingFree
     *
     * @return DispatchInterface
     */
    public function setShippingFree(string $shippingFree) : DispatchInterface;

    /**
     * @return int
     */
    public function getMultiShopId() : int;

    /**
     * @param int $multiShopId
     *
     * @return DispatchInterface
     */
    public function setMultiShopId(int $multiShopId) : DispatchInterface;

    /**
     * @return string
     */
    public function getCustomerGroupId() : string;

    /**
     * @param string $customerGroupId
     *
     * @return DispatchInterface
     */
    public function setCustomerGroupId(string $customerGroupId) : DispatchInterface;

    /**
     * @return int
     */
    public function getBindShippingFree() : int;

    /**
     * @param int $bindShippingFree
     *
     * @return DispatchInterface
     */
    public function setBindShippingFree(int $bindShippingFree) : DispatchInterface;

    /**
     * @return string
     */
    public function getBindTimeFrom() : string;

    /**
     * @param string $bindTimeFrom
     *
     * @return DispatchInterface
     */
    public function setBindTimeFrom(string $bindTimeFrom) : DispatchInterface;

    /**
     * @return string
     */
    public function getBindTimeTo() : string;

    /**
     * @param string $bindTimeTo
     *
     * @return DispatchInterface
     */
    public function setBindTimeTo(string $bindTimeTo) : DispatchInterface;

    /**
     * @return string
     */
    public function getBindInStock() : string;

    /**
     * @param string $bindInStock
     *
     * @return DispatchInterface
     */
    public function setBindInStock(string $bindInStock) : DispatchInterface;

    /**
     * @return int
     */
    public function getBindLastStock() : int;

    /**
     * @param int $bindLastStock
     *
     * @return DispatchInterface
     */
    public function setBindLastStock(int $bindLastStock) : DispatchInterface;

    /**
     * @return string
     */
    public function getBindWeekdayFrom() : string;

    /**
     * @param string $bindWeekdayFrom
     *
     * @return DispatchInterface
     */
    public function setBindWeekdayFrom(string $bindWeekdayFrom) : DispatchInterface;

    /**
     * @return string
     */
    public function getBindWeekdayTo() : string;

    /**
     * @param string $bindWeekdayTo
     *
     * @return DispatchInterface
     */
    public function setBindWeekdayTo(string $bindWeekdayTo) : DispatchInterface;

    /**
     * @return string
     */
    public function getBindWeightFrom() : string;

    /**
     * @param string $bindWeightFrom
     *
     * @return DispatchInterface
     */
    public function setBindWeightFrom(string $bindWeightFrom) : DispatchInterface;

    /**
     * @return string
     */
    public function getBindWeightTo() : string;

    /**
     * @param string $bindWeightTo
     *
     * @return DispatchInterface
     */
    public function setBindWeightTo(string $bindWeightTo) : DispatchInterface;

    /**
     * @return string
     */
    public function getBindPriceFrom() : string;

    /**
     * @param string $bindPriceFrom
     *
     * @return DispatchInterface
     */
    public function setBindPriceFrom(string $bindPriceFrom) : DispatchInterface;

    /**
     * @return string
     */
    public function getBindPriceTo() : string;

    /**
     * @param string $bindPriceTo
     *
     * @return DispatchInterface
     */
    public function setBindPriceTo(string $bindPriceTo) : DispatchInterface;

    /**
     * @return string
     */
    public function getBindSql() : string;

    /**
     * @param string $bindSql
     *
     * @return DispatchInterface
     */
    public function setBindSql(string $bindSql) : DispatchInterface;

    /**
     * @return string
     */
    public function getStatusLink() : string;

    /**
     * @param string $statusLink
     *
     * @return DispatchInterface
     */
    public function setStatusLink(string $statusLink) : DispatchInterface;

    /**
     * @return string
     */
    public function getCalculationSql() : string;

    /**
     * @param string $calculationSql
     *
     * @return DispatchInterface
     */
    public function setCalculationSql(string $calculationSql) : DispatchInterface;

    /**
     * @return string
     */
    public function getAttribute() : string;

    /**
     * @param string $attribute
     *
     * @return DispatchInterface
     */
    public function setAttribute(string $attribute) : DispatchInterface;
}
