<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Model\AddressInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface AddressEndpointInterface
{

    /**
     * @return AddressInterface[]
     */
    public function findAll(): array;

    /**
     * @param int $id
     *
     * @return AddressInterface
     */
    public function find(int $id): AddressInterface;
}
