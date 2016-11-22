<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Payment implements PaymentInterface
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $template;

    /**
     * @var string
     */
    private $class;

    /**
     * @var string
     */
    private $table;

    /**
     * @var bool
     */
    private $hide;

    /**
     * @var string
     */
    private $additionalDescription;

    /**
     * @var int
     */
    private $debitPercent;

    /**
     * @var int
     */
    private $surcharge;

    /**
     * @var string
     */
    private $surchargeString;

    /**
     * @var int
     */
    private $position;

    /**
     * @var bool
     */
    private $active;

    /**
     * @var bool
     */
    private $esdActive;

    /**
     * @var bool
     */
    private $mobileInactive;

    /**
     * @var string
     */
    private $embedIFrame;

    /**
     * @var int
     */
    private $hideProspect;

    /**
     * @var string
     */
    private $action;

    /**
     * @var string
     */
    private $pluginId;

    /**
     * @var string
     */
    private $source;

    /**
     * @var string
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
     * @return PaymentInterface
     */
    public function setId(int $id): PaymentInterface
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
     * @return PaymentInterface
     */
    public function setName(string $name): PaymentInterface
    {
        $this->name = $name;

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
     * @return PaymentInterface
     */
    public function setDescription(string $description): PaymentInterface
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getTemplate(): string
    {
        return $this->template;
    }

    /**
     * @param string $template
     *
     * @return PaymentInterface
     */
    public function setTemplate(string $template): PaymentInterface
    {
        $this->template = $template;

        return $this;
    }

    /**
     * @return string
     */
    public function getClass(): string
    {
        return $this->class;
    }

    /**
     * @param string $class
     *
     * @return PaymentInterface
     */
    public function setClass(string $class): PaymentInterface
    {
        $this->class = $class;

        return $this;
    }

    /**
     * @return string
     */
    public function getTable(): string
    {
        return $this->table;
    }

    /**
     * @param string $table
     *
     * @return PaymentInterface
     */
    public function setTable(string $table): PaymentInterface
    {
        $this->table = $table;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isHide(): bool
    {
        return $this->hide;
    }

    /**
     * @param boolean $hide
     *
     * @return PaymentInterface
     */
    public function setHide(bool $hide): PaymentInterface
    {
        $this->hide = $hide;

        return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalDescription(): string
    {
        return $this->additionalDescription;
    }

    /**
     * @param string $additionalDescription
     *
     * @return PaymentInterface
     */
    public function setAdditionalDescription(string $additionalDescription): PaymentInterface
    {
        $this->additionalDescription = $additionalDescription;

        return $this;
    }

    /**
     * @return int
     */
    public function getDebitPercent(): int
    {
        return $this->debitPercent;
    }

    /**
     * @param int $debitPercent
     *
     * @return PaymentInterface
     */
    public function setDebitPercent(int $debitPercent): PaymentInterface
    {
        $this->debitPercent = $debitPercent;

        return $this;
    }

    /**
     * @return int
     */
    public function getSurcharge(): int
    {
        return $this->surcharge;
    }

    /**
     * @param int $surcharge
     *
     * @return PaymentInterface
     */
    public function setSurcharge(int $surcharge): PaymentInterface
    {
        $this->surcharge = $surcharge;

        return $this;
    }

    /**
     * @return string
     */
    public function getSurchargeString(): string
    {
        return $this->surchargeString;
    }

    /**
     * @param string $surchargeString
     *
     * @return PaymentInterface
     */
    public function setSurchargeString(string $surchargeString): PaymentInterface
    {
        $this->surchargeString = $surchargeString;

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
     * @return PaymentInterface
     */
    public function setPosition(int $position): PaymentInterface
    {
        $this->position = $position;

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
     * @return PaymentInterface
     */
    public function setActive(bool $active): PaymentInterface
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isEsdActive(): bool
    {
        return $this->esdActive;
    }

    /**
     * @param boolean $esdActive
     *
     * @return PaymentInterface
     */
    public function setEsdActive(bool $esdActive): PaymentInterface
    {
        $this->esdActive = $esdActive;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isMobileInactive(): bool
    {
        return $this->mobileInactive;
    }

    /**
     * @param boolean $mobileInactive
     *
     * @return PaymentInterface
     */
    public function setMobileInactive(bool $mobileInactive): PaymentInterface
    {
        $this->mobileInactive = $mobileInactive;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmbedIFrame(): string
    {
        return $this->embedIFrame;
    }

    /**
     * @param string $embedIFrame
     *
     * @return PaymentInterface
     */
    public function setEmbedIFrame(string $embedIFrame): PaymentInterface
    {
        $this->embedIFrame = $embedIFrame;

        return $this;
    }

    /**
     * @return int
     */
    public function getHideProspect(): int
    {
        return $this->hideProspect;
    }

    /**
     * @param int $hideProspect
     *
     * @return PaymentInterface
     */
    public function setHideProspect(int $hideProspect): PaymentInterface
    {
        $this->hideProspect = $hideProspect;

        return $this;
    }

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @param string $action
     *
     * @return PaymentInterface
     */
    public function setAction(string $action): PaymentInterface
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return string
     */
    public function getPluginId(): string
    {
        return $this->pluginId;
    }

    /**
     * @param string $pluginId
     *
     * @return PaymentInterface
     */
    public function setPluginId(string $pluginId): PaymentInterface
    {
        $this->pluginId = $pluginId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @param string $source
     *
     * @return PaymentInterface
     */
    public function setSource(string $source): PaymentInterface
    {
        $this->source = $source;

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
     * @return PaymentInterface
     */
    public function setAttribute(string $attribute): PaymentInterface
    {
        $this->attribute = $attribute;

        return $this;
    }
}
