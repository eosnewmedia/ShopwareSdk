<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint\Definition;

use Enm\ShopwareSdk\Model\OrderInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface OrderEndpointInterface
{
    
    /**
     * @return OrderInterface[]
     */
    public function findAll(): array;
    
    /**
     * @param int $id
     *
     * @return OrderInterface
     */
    public function find(int $id): OrderInterface;
}