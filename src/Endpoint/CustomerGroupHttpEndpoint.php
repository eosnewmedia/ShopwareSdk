<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Model\CustomerGroupInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class CustomerGroupHttpEndpoint extends AbstractHttpEndpoint implements CustomerGroupEndpointInterface
{

    /**
     * @return CustomerGroupInterface[]
     */
    public function findAll(): array
    {
        $json = $this->request('GET', '/api/customerGroups');

        return $this->serializer()->deserialize($json, '[]', 'json');
    }

    /**
     * @param int $id
     *
     * @return CustomerGroupInterface
     */
    public function find(int $id): CustomerGroupInterface
    {
        $json = $this->request('GET', '/api/customerGroups/'.$id);

        return $this->serializer()->deserialize($json, '', 'json');
    }

}