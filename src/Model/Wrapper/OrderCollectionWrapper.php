<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Wrapper;

use Enm\ShopwareSdk\Model\Order\Order;
use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class OrderCollectionWrapper implements CollectionWrapperInterface
{

    /**
     * @var Order[]
     * @Serializer\Type("array<Enm\ShopwareSdk\Model\Order\Order>")
     * @Serializer\SerializedName("data")
     */
    private $data;

    /**
     * @return Order[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Order[] $data
     *
     * @return CollectionWrapperInterface
     */
    public function setData(array $data): CollectionWrapperInterface
    {
        $this->data = $data;

        return $this;
    }
}
