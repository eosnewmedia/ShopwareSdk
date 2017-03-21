<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint\Definition;

use Enm\ShopwareSdk\Model\Manufacturer\ManufacturerInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface ManufacturerEndpointInterface
{

    /**
     * @return ManufacturerInterface[]
     */
    public function findAll(): array;

    /**
     * @param int $id
     *
     * @return ManufacturerInterface
     */
    public function find(int $id): ManufacturerInterface;

    /**
     * @param ManufacturerInterface $manufacturer
     *
     * @return ManufacturerInterface
     */
    public function save(ManufacturerInterface $manufacturer): ManufacturerInterface;
}
