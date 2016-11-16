<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Model\CountryInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface CountryEndpointInterface
{

    /**
     * @return CountryInterface[]
     */
    public function findAll(): array;

    /**
     * @param int $id
     *
     * @return CountryInterface
     */
    public function find(int $id): CountryInterface;
}