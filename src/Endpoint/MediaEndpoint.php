<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Endpoint\Definition\MediaEndpointInterface;
use Enm\ShopwareSdk\Model\Media\MediaInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class MediaEndpoint extends AbstractEndpoint implements MediaEndpointInterface {
    /**
     * @return MediaInterface[]
     * @throws \LogicException
     */
    public function findAll(): array {
        $response = $this->shopware()->get('/api/categories');

        $mediaWrapper = $this->deserializer()
            ->deserializeCollection(
                (string)$response->getBody()
            );

        foreach ($mediaWrapper->getData() as $media) {
            if (!$media instanceof MediaInterface) {
                throw new \LogicException();
            }
        }

        return $mediaWrapper->getData();
    }

    /**
     * @param int $id
     *
     * @return MediaInterface
     * @throws \LogicException
     */
    public function find(int $id): MediaInterface {
        $response = $this->shopware()->get('/api/media/' . (string)$id);

        $mediaWrapper = $this->deserializer()
            ->deserialize((string)$response->getBody());

        $media = $mediaWrapper->getData();
        if (!$media instanceof MediaInterface) {
            throw new \LogicException();
        }

        return $media;
    }

    /**
     * @param MediaInterface $media
     *
     * @return MediaEndpointInterface
     */
    public function save(MediaInterface $media): MediaEndpointInterface {
        $data = $this->serializer()->serialize($media);

        if ($media->getId() !== 0) {
            $this->shopware()
                ->put('/api/media/' . (string)$media->getId(), [], $data);
        } else {
            $response = $this->shopware()->post('/api/media', [], $data);
            $data = json_decode((string)$response->getBody(), true);
            $media->setId((int)$data['data']['id']);
        }

        return $this;
    }
}
