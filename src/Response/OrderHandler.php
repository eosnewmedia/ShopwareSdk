<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Response;

use Enm\ShopwareSdk\Model\Order\Order;
use Enm\ShopwareSdk\Model\Order\OrderInterface;

/**
 * @author Philipp Marien <marien@eosnewmedia.de>
 */
class OrderHandler extends AbstractHandler
{
    /**
     * @return string
     */
    protected function modelClass(): string
    {
        return Order::class;
    }
    
    /**
     * @return array
     */
    public function getSupportedTypes(): array
    {
        return [OrderInterface::class];
    }
}
