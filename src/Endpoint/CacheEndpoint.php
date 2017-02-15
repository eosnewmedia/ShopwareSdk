<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Endpoint\Definition\CacheEndpointInterface;

/**
 * @author Nicklas Reincke <reincke@eosnewmedia.de>
 */
class CacheEndpoint extends AbstractEndpoint implements CacheEndpointInterface
{

    /**
     * Delete cache.
     *
     * @see \Enm\ShopwareSdk\Endpoint\Definition\CacheEndpointInterface::DELETE_ALL
     * @see \Enm\ShopwareSdk\Endpoint\Definition\CacheEndpointInterface::DELETE_HTTP
     * @see \Enm\ShopwareSdk\Endpoint\Definition\CacheEndpointInterface::DELETE_TEMPLATE
     *
     * @param string $type
     *
     * @return CacheEndpointInterface
     */
    public function delete(string $type = CacheEndpointInterface::DELETE_ALL): CacheEndpointInterface
    {
        $this->shopware()->delete('/api/caches/'.$type);

        return $this;
    }

}
