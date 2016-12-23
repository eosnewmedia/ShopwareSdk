<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Serializer;

use Enm\ShopwareSdk\Model\Manufacturer\ManufacturerInterface;
use Enm\ShopwareSdk\Model\Wrapper\ManufacturerCollectionWrapper;
use Enm\ShopwareSdk\Model\Wrapper\ManufacturerWrapper;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class ManufacturerHandler extends AbstractHandler {
    /**
     * @return string
     */
    protected function wrapperClass(): string {
        return ManufacturerWrapper::class;
    }

    /**
     * @return string
     */
    protected function collectionWrapperClass(): string {
        return ManufacturerCollectionWrapper::class;
    }

    /**
     * @return array
     */
    public function getSupportedTypes(): array {
        return [ManufacturerInterface::class];
    }
}
