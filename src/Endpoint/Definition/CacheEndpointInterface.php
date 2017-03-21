<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint\Definition;

/**
 * @author Nicklas Reincke <reincke@eosnewmedia.de>
 */
interface CacheEndpointInterface
{

    /**
     * Deletes all caches.
     */
    const DELETE_ALL = '';

    /**
     * Deletes the HTTP cache.
     */
    const DELETE_HTTP = 'http';

    /**
     * Deletes the template cache.
     */
    const DELETE_TEMPLATE = 'template';

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
    public function delete(string $type = CacheEndpointInterface::DELETE_ALL): CacheEndpointInterface;

}
