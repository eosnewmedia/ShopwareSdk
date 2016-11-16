<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Model\MediaInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface MediaEndpointInterface
{

    /**
     * @return MediaInterface[]
     */
    public function findAll(): array;

    /**
     * @param int $id
     *
     * @return MediaInterface
     */
    public function find(int $id): MediaInterface;
}