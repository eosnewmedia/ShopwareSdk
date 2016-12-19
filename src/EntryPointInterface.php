<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk;

use Enm\ShopwareSdk\Endpoint\Definition\ArticleEndpointInterface;
use Enm\ShopwareSdk\Endpoint\Definition\CategoryEndpointInterface;
use Enm\ShopwareSdk\Endpoint\Definition\OrderEndpointInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface EntryPointInterface
{
    /**
     * @return ArticleEndpointInterface
     */
    public function articles(): ArticleEndpointInterface;
    
    /**
     * @return OrderEndpointInterface
     */
    public function orders(): OrderEndpointInterface;

    /**
     * @return CategoryEndpointInterface
     */
    public function categories(): CategoryEndpointInterface;
}
