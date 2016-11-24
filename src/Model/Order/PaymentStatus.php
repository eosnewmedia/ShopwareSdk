<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class PaymentStatus implements PaymentStatusInterface
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
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("position")
     */
    private $position;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("group")
     */
    private $group;
    
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("sendMail")
     */
    private $sendMail;
    
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
     * @return PaymentStatusInterface
     */
    public function setId(int $id): PaymentStatusInterface
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
     * @return PaymentStatusInterface
     */
    public function setName(string $name): PaymentStatusInterface
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
     * @return PaymentStatusInterface
     */
    public function setDescription(string $description): PaymentStatusInterface
    {
        $this->description = $description;
        
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
     * @return PaymentStatusInterface
     */
    public function setPosition(int $position): PaymentStatusInterface
    {
        $this->position = $position;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getGroup(): string
    {
        return (string)$this->group;
    }
    
    /**
     * @param string $group
     *
     * @return PaymentStatusInterface
     */
    public function setGroup(string $group): PaymentStatusInterface
    {
        $this->group = $group;
        
        return $this;
    }
    
    /**
     * @return int
     */
    public function getSendMail(): int
    {
        return (int)$this->sendMail;
    }
    
    /**
     * @param int $sendMail
     *
     * @return PaymentStatusInterface
     */
    public function setSendMail(int $sendMail): PaymentStatusInterface
    {
        $this->sendMail = $sendMail;
        
        return $this;
    }
}
