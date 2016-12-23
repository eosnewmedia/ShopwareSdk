<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Endpoint\Definition\ManufacturerEndpointInterface;
use Enm\ShopwareSdk\Model\Manufacturer\ManufacturerInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class ManufacturerEndpoint extends AbstractEndpoint implements ManufacturerEndpointInterface {
    /**
     * @return ManufacturerInterface[]
     * @throws \LogicException
     */
    public function findAll(): array {
        $response = $this->shopware()->get('/api/manufacturers');

        $manufacturerWrapper = $this->deserializer()
            ->deserializeCollection(
                (string)$response->getBody()
            );

        foreach ($manufacturerWrapper->getData() as $manufacturer) {
            if (!$manufacturer instanceof ManufacturerInterface) {
                throw new \LogicException();
            }
        }

        return $manufacturerWrapper->getData();
    }

    /**
     * @param int $id
     *
     * @return ManufacturerInterface
     * @throws \LogicException
     */
    public function find(int $id): ManufacturerInterface {
        $response = $this->shopware()->get('/api/manufacturers/' . (string)$id);

        $manufacturerWrapper = $this->deserializer()
            ->deserialize((string)$response->getBody());

        $manufacturer = $manufacturerWrapper->getData();
        if (!$manufacturer instanceof ManufacturerInterface) {
            throw new \LogicException();
        }

        return $manufacturer;
    }

    /**
     * @param ManufacturerInterface $manufacturer
     *
     * @return ManufacturerInterface
     */
    public function save(ManufacturerInterface $manufacturer): ManufacturerInterface {
        $data = $this->serializer()->serialize($manufacturer);

        if ($manufacturer->getId() !== 0) {
            $this->shopware()
                ->put('/api/manufacturers/' . (string)$manufacturer->getId(), [], $data);
        } else {
            $response = $this->shopware()->post('/api/manufacturers', [], $data);
            $data = json_decode((string)$response->getBody(), true);
            $manufacturer->setId((int)$data['data']['id']);
        }

        return $manufacturer;
    }
}