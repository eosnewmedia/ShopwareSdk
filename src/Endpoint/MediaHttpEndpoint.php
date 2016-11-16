<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Model\MediaInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class MediaHttpEndpoint extends AbstractHttpEndpoint implements MediaEndpointInterface
{

    /**
     * @return MediaInterface[]
     */
    public function findAll(): array
    {
        $json = $this->request('GET', '/api/media');

        return $this->serializer()->deserialize($json, '[]', 'json');
    }

    /**
     * @param int $id
     *
     * @return MediaInterface
     */
    public function find(int $id): MediaInterface
    {
        $json = $this->request('GET', '/api/media/'.$id);

        return $this->serializer()->deserialize($json, '', 'json');
    }

}