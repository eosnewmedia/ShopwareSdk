<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Wrapper;

use Enm\ShopwareSdk\Model\Category\Category;
use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class CategoryCollectionWrapper implements CollectionWrapperInterface {

    /**
     * @var Category[]
     * @Serializer\Type("array<Enm\ShopwareSdk\Model\Category\Category>")
     * @Serializer\SerializedName("data")
     */
    private $data;

    /**
     * @return Category[]
     */
    public function getData(): array {
        return $this->data;
    }

    /**
     * @param Category[] $data
     *
     * @return CollectionWrapperInterface
     */
    public function setData(array $data): CollectionWrapperInterface {
        $this->data = $data;

        return $this;
    }
}
