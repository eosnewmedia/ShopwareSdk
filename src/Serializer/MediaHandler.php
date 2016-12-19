<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Serializer;

use Enm\ShopwareSdk\Model\Media\MediaInterface;
use Enm\ShopwareSdk\Model\Wrapper\MediaCollectionWrapper;
use Enm\ShopwareSdk\Model\Wrapper\MediaWrapper;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class MediaHandler extends AbstractHandler {
    /**
     * @return string
     */
    protected function wrapperClass(): string {
        return MediaWrapper::class;
    }

    /**
     * @return string
     */
    protected function collectionWrapperClass(): string {
        return MediaCollectionWrapper::class;
    }

    /**
     * @return array
     */
    public function getSupportedTypes(): array {
        return [MediaInterface::class];
    }
}
