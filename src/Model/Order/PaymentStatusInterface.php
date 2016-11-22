<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface PaymentStatusInterface
{

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return PaymentStatusInterface
     */
    public function setId(int $id) : PaymentStatusInterface;

    /**
     * @return string
     */
    public function getName() : string;

    /**
     * @param string $name
     *
     * @return PaymentStatusInterface
     */
    public function setName(string $name) : PaymentStatusInterface;

    /**
     * @return string
     */
    public function getDescription() : string;

    /**
     * @param string $description
     *
     * @return PaymentStatusInterface
     */
    public function setDescription(string $description) : PaymentStatusInterface;

    /**
     * @return int
     */
    public function getPosition() : int;

    /**
     * @param int $position
     *
     * @return PaymentStatusInterface
     */
    public function setPosition(int $position) : PaymentStatusInterface;

    /**
     * @return string
     */
    public function getGroup() : string;

    /**
     * @param string $group
     *
     * @return PaymentStatusInterface
     */
    public function setGroup(string $group) : PaymentStatusInterface;

    /**
     * @return int
     */
    public function getSendMail() : int;

    /**
     * @param int $sendMail
     *
     * @return PaymentStatusInterface
     */
    public function setSendMail(int $sendMail) : PaymentStatusInterface;
}
