<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Model\VariantInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface VariantEndpointInterface
{

    /**
     * @param int $id
     *
     * @return VariantInterface
     */
    public function find(int $id): VariantInterface;
}