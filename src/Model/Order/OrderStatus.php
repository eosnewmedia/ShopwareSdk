<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class OrderStatus implements OrderStatusInterface
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
     * @var string
     * @SerializerType("string")
     */
    private $description;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $position;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $group;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $sendMail;

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
        return $this->name;
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
        return $this->description;
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
        return $this->position;
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
        return $this->group;
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
        return $this->sendMail;
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
