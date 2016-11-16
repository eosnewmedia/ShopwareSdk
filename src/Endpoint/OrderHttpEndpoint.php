<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Model\OrderInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class OrderHttpEndpoint extends AbstractHttpEndpoint implements OrderEndpointInterface
{

    /**
     * @return OrderInterface[]
     */
    public function findAll(): array
    {
        $json = $this->request('GET', '/api/orders');

        return $this->serializer()->deserialize($json, '[]', 'json');
    }

    /**
     * @param int $id
     *
     * @return OrderInterface
     */
    public function find(int $id): OrderInterface
    {
        $json = $this->request('GET', '/api/orders/'.$id);

        return $this->serializer()->deserialize($json, '', 'json');
    }

}