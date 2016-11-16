<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Model\AddressInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class AddressHttpEndpoint extends AbstractHttpEndpoint implements AddressEndpointInterface
{

    /**
     * @return AddressInterface[]
     */
    public function findAll(): array
    {
        $json = $this->request('GET', '/api/addresses');

        return $this->serializer()->deserialize($json, '[]', 'json');
    }

    /**
     * @param int $id
     *
     * @return AddressInterface
     */
    public function find(int $id): AddressInterface
    {
        $json = $this->request('GET', '/api/address/'.$id);

        return $this->serializer()->deserialize($json, '', 'json');
    }
}
