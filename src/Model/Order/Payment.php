<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Payment implements PaymentInterface
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
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("description")
     */
    private $description;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("template")
     */
    private $template;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("class")
     */
    private $class;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("table")
     */
    private $table;
    
    /**
     * @var bool
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("hide")
     */
    private $hide;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("additionalDescription")
     */
    private $additionalDescription;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("debitPercent")
     */
    private $debitPercent;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("surcharge")
     */
    private $surcharge;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("surchargeString")
     */
    private $surchargeString;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("position")
     */
    private $position;
    
    /**
     * @var bool
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("active")
     */
    private $active;
    
    /**
     * @var bool
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("esdActive")
     */
    private $esdActive;
    
    /**
     * @var bool
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("mobileInactive")
     */
    private $mobileInactive;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("embedIFrame")
     */
    private $embedIFrame;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("hideProspect")
     */
    private $hideProspect;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("action")
     */
    private $action;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("pluginId")
     */
    private $pluginId;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("source")
     */
    private $source;
    
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
        return (string)$this->name;
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
        return (string)$this->description;
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
        return (string)$this->template;
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
        return (string)$this->class;
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
        return (string)$this->table;
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
        return (bool)$this->hide;
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
        return (string)$this->additionalDescription;
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
        return (int)$this->debitPercent;
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
        return (int)$this->surcharge;
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
        return (string)$this->surchargeString;
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
        return (int)$this->position;
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
        return (bool)$this->active;
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
        return (bool)$this->esdActive;
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
        return (bool)$this->mobileInactive;
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
        return (string)$this->embedIFrame;
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
        return (int)$this->hideProspect;
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
        return (string)$this->action;
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
        return (string)$this->pluginId;
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
        return (string)$this->source;
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
        return (string)$this->attribute;
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
