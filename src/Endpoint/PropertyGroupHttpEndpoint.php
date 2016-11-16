<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Model\PropertyGroupInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class PropertyGroupHttpEndpoint extends AbstractHttpEndpoint implements PropertyGroupEndpointInterface
{

    /**
     * @return PropertyGroupInterface[]
     */
    public function findAll(): array
    {
        $json = $this->request('GET', '/api/propertyGroups');

        return $this->serializer()->deserialize($json, '[]', 'json');
    }

    /**
     * @param int $id
     *
     * @return PropertyGroupInterface
     */
    public function find(int $id): PropertyGroupInterface
    {
        $json = $this->request('GET', '/api/propertyGroups/'.$id);

        return $this->serializer()->deserialize($json, '', 'json');
    }

}