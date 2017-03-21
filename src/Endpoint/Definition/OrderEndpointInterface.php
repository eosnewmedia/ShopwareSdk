<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint\Definition;

use Enm\ShopwareSdk\Model\Order\OrderInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface OrderEndpointInterface
{
    /**
     * @param array $queryParams
     *
     * @return OrderInterface[]
     */
    public function findAll(array $queryParams = []): array;
    
    /**
     * @param int $id
     *
     * @return OrderInterface
     */
    public function find(int $id): OrderInterface;
}
