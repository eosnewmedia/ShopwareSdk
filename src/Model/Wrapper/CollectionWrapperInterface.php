<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Wrapper;

use Enm\ShopwareSdk\Model\RootModelInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface CollectionWrapperInterface
{

    /**
     * @return RootModelInterface[]
     */
    public function getData(): array;


    /**
     * @param RootModelInterface[] $models
     *
     * @return CollectionWrapperInterface
     */
    public function setData(array $models): CollectionWrapperInterface;
}
