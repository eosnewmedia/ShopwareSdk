<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class OrderStatus implements OrderStatusInterface
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
     * @return OrderStatusInterface
     */
    public function setId(int $id): OrderStatusInterface
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
     * @return OrderStatusInterface
     */
    public function setName(string $name): OrderStatusInterface
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
     * @return OrderStatusInterface
     */
    public function setDescription(string $description): OrderStatusInterface
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
     * @return OrderStatusInterface
     */
    public function setPosition(int $position): OrderStatusInterface
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
     * @return OrderStatusInterface
     */
    public function setGroup(string $group): OrderStatusInterface
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
     * @return OrderStatusInterface
     */
    public function setSendMail(int $sendMail): OrderStatusInterface
    {
        $this->sendMail = $sendMail;

        return $this;
    }
}
