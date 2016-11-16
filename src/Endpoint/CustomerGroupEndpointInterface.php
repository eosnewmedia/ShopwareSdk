<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Model\CustomerGroupInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface CustomerGroupEndpointInterface
{

    /**
     * @return CustomerGroupInterface[]
     */
    public function findAll(): array;

    /**
     * @param int $id
     *
     * @return CustomerGroupInterface
     */
    public function find(int $id): CustomerGroupInterface;
}