<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Model\PropertyGroupInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface PropertyGroupEndpointInterface
{

    /**
     * @return PropertyGroupInterface[]
     */
    public function findAll(): array;

    /**
     * @param int $id
     *
     * @return PropertyGroupInterface
     */
    public function find(int $id): PropertyGroupInterface;
}