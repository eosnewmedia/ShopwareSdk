<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface OrderStatusInterface
{

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return OrderStatusInterface
     */
    public function setId(int $id) : OrderStatusInterface;

    /**
     * @return string
     */
    public function getName() : string;

    /**
     * @param string $name
     *
     * @return OrderStatusInterface
     */
    public function setName(string $name) : OrderStatusInterface;

    /**
     * @return string
     */
    public function getDescription() : string;

    /**
     * @param string $description
     *
     * @return OrderStatusInterface
     */
    public function setDescription(string $description) : OrderStatusInterface;

    /**
     * @return int
     */
    public function getPosition() : int;

    /**
     * @param int $position
     *
     * @return OrderStatusInterface
     */
    public function setPosition(int $position) : OrderStatusInterface;

    /**
     * @return string
     */
    public function getGroup() : string;

    /**
     * @param string $group
     *
     * @return OrderStatusInterface
     */
    public function setGroup(string $group) : OrderStatusInterface;

    /**
     * @return int
     */
    public function getSendMail() : int;

    /**
     * @param int $sendMail
     *
     * @return OrderStatusInterface
     */
    public function setSendMail(int $sendMail) : OrderStatusInterface;
}
