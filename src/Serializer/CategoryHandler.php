<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Serializer;

use Enm\ShopwareSdk\Model\Category\CategoryInterface;
use Enm\ShopwareSdk\Model\Wrapper\CategoryCollectionWrapper;
use Enm\ShopwareSdk\Model\Wrapper\CategoryWrapper;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class CategoryHandler extends AbstractHandler {
    /**
     * @return string
     */
    protected function wrapperClass(): string {
        return CategoryWrapper::class;
    }

    /**
     * @return string
     */
    protected function collectionWrapperClass(): string {
        return CategoryCollectionWrapper::class;
    }

    /**
     * @return array
     */
    public function getSupportedTypes(): array {
        return [CategoryInterface::class];
    }
}
