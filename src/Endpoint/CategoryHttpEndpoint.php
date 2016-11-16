<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Model\CategoryInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class CategoryHttpEndpoint extends AbstractHttpEndpoint implements CategoryEndpointInterface
{

    /**
     * @return CategoryInterface[]
     */
    public function findAll(): array
    {
        $json = $this->request('GET', '/api/categories');

        return $this->serializer()->deserialize($json, '[]', 'json');
    }

    /**
     * @param int $id
     *
     * @return CategoryInterface
     */
    public function find(int $id): CategoryInterface
    {
        $json = $this->request('GET', '/api/categories/'.$id);

        return $this->serializer()->deserialize($json, '', 'json');
    }

}