<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Model\CustomerInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class CustomerHttpEndpoint extends AbstractHttpEndpoint implements CustomerEndpointInterface
{

    /**
     * @return CustomerInterface[]
     */
    public function findAll(): array
    {
        $json = $this->request('GET', '/api/customers');

        return $this->serializer()->deserialize($json, '[]', 'json');
    }

    /**
     * @param int $id
     *
     * @return CustomerInterface
     */
    public function find(int $id): CustomerInterface
    {
        $json = $this->request('GET', '/api/customers/'.$id);

        return $this->serializer()->deserialize($json, '', 'json');
    }

}