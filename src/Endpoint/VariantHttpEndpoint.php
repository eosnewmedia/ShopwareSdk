<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Model\VariantInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class VariantHttpEndpoint extends AbstractHttpEndpoint implements VariantEndpointInterface
{

    /**
     * @param int $id
     *
     * @return VariantInterface
     */
    public function find(int $id): VariantInterface
    {
        $json = $this->request('GET', '/api/variants/'.$id);

        return $this->serializer()->deserialize($json, '', 'json');
    }

}