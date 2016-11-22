<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Endpoint\Definition\OrderEndpointInterface;
use Enm\ShopwareSdk\Model\OrderInterface;

/**
 * @author Philipp Marien <marien@eosnewmedia.de>
 */
class OrderEndpoint extends AbstractEndpoint implements OrderEndpointInterface
{
    /**
     * @return OrderInterface[]
     * @throws \LogicException
     */
    public function findAll(): array
    {
        $response = $this->shopware()->get('/api/orders');
        
        $orders = $this->responseHandler()->handleCollection($response);
        foreach ($orders as $order) {
            if (!$order instanceof OrderInterface) {
                throw new \LogicException();
            }
        }
        
        return $orders;
    }
    
    /**
     * @param int $id
     *
     * @return OrderInterface
     * @throws \LogicException
     */
    public function find(int $id): OrderInterface
    {
        $response = $this->shopware()->get('/api/orders');
        
        $order = $this->responseHandler()->handle($response);
        if (!$order instanceof OrderInterface) {
            throw new \LogicException();
        }
        
        return $order;
    }
}
