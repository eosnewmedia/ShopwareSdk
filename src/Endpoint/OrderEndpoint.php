<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Endpoint\Definition\OrderEndpointInterface;
use Enm\ShopwareSdk\Model\Order\OrderInterface;

/**
 * @author Philipp Marien <marien@eosnewmedia.de>
 */
class OrderEndpoint extends AbstractEndpoint implements OrderEndpointInterface
{
    /**
     * @param array $queryParams
     *
     * @return OrderInterface[]
     * @throws \LogicException
     */
    public function findAll(array $queryParams = []): array
    {
        $response = $this->shopware()->get('/api/orders', $queryParams);
        
        $orderWrapper = $this->deserializer()
                             ->deserializeCollection(
                               (string)$response->getBody()
                             );
        
        foreach ($orderWrapper->getData() as $order) {
            if (!$order instanceof OrderInterface) {
                throw new \LogicException();
            }
        }
        
        return $orderWrapper->getData();
    }
    
    /**
     * @param int $id
     *
     * @return OrderInterface
     * @throws \LogicException
     */
    public function find(int $id): OrderInterface
    {
        $response = $this->shopware()->get('/api/orders/' . (string)$id);
        
        $orderWrapper = $this->deserializer()
                             ->deserialize((string)$response->getBody());
        
        $order = $orderWrapper->getData();
        if (!$order instanceof OrderInterface) {
            throw new \LogicException();
        }
        
        return $order;
    }
}
