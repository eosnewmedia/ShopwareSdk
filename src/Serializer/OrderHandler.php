<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Serializer;

use Enm\ShopwareSdk\Model\Order\OrderInterface;
use Enm\ShopwareSdk\Model\Wrapper\OrderCollectionWrapper;
use Enm\ShopwareSdk\Model\Wrapper\OrderWrapper;

/**
 * @author Philipp Marien <marien@eosnewmedia.de>
 */
class OrderHandler extends AbstractHandler
{
    /**
     * @return string
     */
    protected function wrapperClass(): string
    {
        return OrderWrapper::class;
    }
    
    /**
     * @return string
     */
    protected function collectionWrapperClass(): string
    {
        return OrderCollectionWrapper::class;
    }
    
    /**
     * @return array
     */
    public function getSupportedTypes(): array
    {
        return [OrderInterface::class];
    }
}
