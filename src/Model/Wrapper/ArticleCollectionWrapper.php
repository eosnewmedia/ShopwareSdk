<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Wrapper;

use Enm\ShopwareSdk\Model\Article\Article;
use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class ArticleCollectionWrapper implements CollectionWrapperInterface
{

    /**
     * @var Article[]
     * @Serializer\Type("array<Enm\ShopwareSdk\Model\Article\Article>")
     * @Serializer\SerializedName("data")
     */
    private $data;

    /**
     * @return Article[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Article[] $data
     *
     * @return CollectionWrapperInterface
     */
    public function setData(array $data): CollectionWrapperInterface
    {
        $this->data = $data;

        return $this;
    }
}
