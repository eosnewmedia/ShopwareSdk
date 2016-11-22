<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class PaymentStatus implements PaymentStatusInterface
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
     * @var int
     */
    private $position;

    /**
     * @var string
     */
    private $group;

    /**
     * @var int
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
        return $this->name;
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
        return $this->description;
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
        return $this->position;
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
        return $this->group;
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
        return $this->sendMail;
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
