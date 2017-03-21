<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Wrapper;

use Enm\ShopwareSdk\Model\Media\Media;
use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class MediaCollectionWrapper implements CollectionWrapperInterface
{

    /**
     * @var Media[]
     * @Serializer\Type("array<Enm\ShopwareSdk\Model\Media\Media>")
     * @Serializer\SerializedName("data")
     */
    private $data;

    /**
     * @return Media[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Media[] $data
     *
     * @return CollectionWrapperInterface
     */
    public function setData(array $data): CollectionWrapperInterface
    {
        $this->data = $data;

        return $this;
    }
}
