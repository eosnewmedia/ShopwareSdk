<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Wrapper;

use Enm\ShopwareSdk\Model\Manufacturer\Manufacturer;
use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class ManufacturerCollectionWrapper implements CollectionWrapperInterface {

    /**
     * @var Manufacturer[]
     * @Serializer\Type("array<Enm\ShopwareSdk\Model\Manufacturer\Manufacturer>")
     * @Serializer\SerializedName("data")
     */
    private $data;

    /**
     * @return Manufacturer[]
     */
    public function getData(): array {
        return $this->data;
    }

    /**
     * @param Manufacturer[] $data
     *
     * @return CollectionWrapperInterface
     */
    public function setData(array $data): CollectionWrapperInterface {
        $this->data = $data;

        return $this;
    }
}
