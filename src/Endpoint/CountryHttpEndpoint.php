<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Model\CountryInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class CountryHttpEndpoint extends AbstractHttpEndpoint implements CountryEndpointInterface
{

    /**
     * @return CountryInterface[]
     */
    public function findAll(): array
    {
        $json = $this->request('GET', '/api/countries');

        return $this->serializer()->deserialize($json, '[]', 'json');
    }

    /**
     * @param int $id
     *
     * @return CountryInterface
     */
    public function find(int $id): CountryInterface
    {
        $json = $this->request('GET', '/api/countries/'.$id);

        return $this->serializer()->deserialize($json, '', 'json');
    }

}