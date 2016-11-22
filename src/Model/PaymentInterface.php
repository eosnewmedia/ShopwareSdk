<?php
namespace Enm\ShopwareSdk\Model;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface PaymentInterface
{

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return PaymentInterface
     */
    public function setId(int $id) : PaymentInterface;

    /**
     * @return string
     */
    public function getName() : string;

    /**
     * @param string $name
     *
     * @return PaymentInterface
     */
    public function setName(string $name) : PaymentInterface;

    /**
     * @return string
     */
    public function getDescription() : string;

    /**
     * @param string $description
     *
     * @return PaymentInterface
     */
    public function setDescription(string $description) : PaymentInterface;

    /**
     * @return string
     */
    public function getTemplate() : string;

    /**
     * @param string $template
     *
     * @return PaymentInterface
     */
    public function setTemplate(string $template) : PaymentInterface;

    /**
     * @return string
     */
    public function getClass() : string;

    /**
     * @param string $class
     *
     * @return PaymentInterface
     */
    public function setClass(string $class) : PaymentInterface;

    /**
     * @return string
     */
    public function getTable() : string;

    /**
     * @param string $table
     *
     * @return PaymentInterface
     */
    public function setTable(string $table) : PaymentInterface;

    /**
     * @return boolean
     */
    public function isHide() : bool;

    /**
     * @param boolean $hide
     *
     * @return PaymentInterface
     */
    public function setHide(bool $hide) : PaymentInterface;

    /**
     * @return string
     */
    public function getAdditionalDescription() : string;

    /**
     * @param string $additionalDescription
     *
     * @return PaymentInterface
     */
    public function setAdditionalDescription(string $additionalDescription) : PaymentInterface;

    /**
     * @return int
     */
    public function getDebitPercent() : int;

    /**
     * @param int $debitPercent
     *
     * @return PaymentInterface
     */
    public function setDebitPercent(int $debitPercent) : PaymentInterface;

    /**
     * @return int
     */
    public function getSurcharge() : int;

    /**
     * @param int $surcharge
     *
     * @return PaymentInterface
     */
    public function setSurcharge(int $surcharge) : PaymentInterface;

    /**
     * @return string
     */
    public function getSurchargeString() : string;

    /**
     * @param string $surchargeString
     *
     * @return PaymentInterface
     */
    public function setSurchargeString(string $surchargeString) : PaymentInterface;

    /**
     * @return int
     */
    public function getPosition() : int;

    /**
     * @param int $position
     *
     * @return PaymentInterface
     */
    public function setPosition(int $position) : PaymentInterface;

    /**
     * @return boolean
     */
    public function isActive() : bool;

    /**
     * @param boolean $active
     *
     * @return PaymentInterface
     */
    public function setActive(bool $active) : PaymentInterface;

    /**
     * @return boolean
     */
    public function isEsdActive() : bool;

    /**
     * @param boolean $esdActive
     *
     * @return PaymentInterface
     */
    public function setEsdActive(bool $esdActive) : PaymentInterface;

    /**
     * @return boolean
     */
    public function isMobileInactive() : bool;

    /**
     * @param boolean $mobileInactive
     *
     * @return PaymentInterface
     */
    public function setMobileInactive(bool $mobileInactive) : PaymentInterface;

    /**
     * @return string
     */
    public function getEmbedIFrame() : string;

    /**
     * @param string $embedIFrame
     *
     * @return PaymentInterface
     */
    public function setEmbedIFrame(string $embedIFrame) : PaymentInterface;

    /**
     * @return int
     */
    public function getHideProspect() : int;

    /**
     * @param int $hideProspect
     *
     * @return PaymentInterface
     */
    public function setHideProspect(int $hideProspect) : PaymentInterface;

    /**
     * @return string
     */
    public function getAction() : string;

    /**
     * @param string $action
     *
     * @return PaymentInterface
     */
    public function setAction(string $action) : PaymentInterface;

    /**
     * @return string
     */
    public function getPluginId() : string;

    /**
     * @param string $pluginId
     *
     * @return PaymentInterface
     */
    public function setPluginId(string $pluginId) : PaymentInterface;

    /**
     * @return string
     */
    public function getSource() : string;

    /**
     * @param string $source
     *
     * @return PaymentInterface
     */
    public function setSource(string $source) : PaymentInterface;

    /**
     * @return string
     */
    public function getAttribute() : string;

    /**
     * @param string $attribute
     *
     * @return PaymentInterface
     */
    public function setAttribute(string $attribute) : PaymentInterface;
}