<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Model\CategoryInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface CategoryEndpointInterface
{

    /**
     * @return CategoryInterface[]
     */
    public function findAll(): array;

    /**
     * @param int $id
     *
     * @return CategoryInterface
     */
    public function find(int $id): CategoryInterface;
}