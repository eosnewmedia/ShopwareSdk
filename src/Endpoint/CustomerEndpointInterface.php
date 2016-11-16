<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Model\CustomerInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface CustomerEndpointInterface
{

    /**
     * @return CustomerInterface[]
     */
    public function findAll(): array;

    /**
     * @param int $id
     *
     * @return CustomerInterface
     */
    public function find(int $id): CustomerInterface;
}