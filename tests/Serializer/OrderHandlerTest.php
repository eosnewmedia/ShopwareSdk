<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Tests\Serializer;

use Enm\ShopwareSdk\Model\Order\Order;
use Enm\ShopwareSdk\Model\Order\OrderInterface;
use Enm\ShopwareSdk\Model\Wrapper\OrderCollectionWrapper;
use Enm\ShopwareSdk\Model\Wrapper\OrderWrapper;
use Enm\ShopwareSdk\Serializer\OrderHandler;
use JMS\Serializer\SerializerInterface;
use PHPUnit\Framework\TestCase;

/**
 * @author Philipp Marien <marien@eosnewmedia.de>
 */
class OrderHandlerTest extends TestCase
{

    public function testHandle()
    {
        $handler = new OrderHandler(
            $this->createConfiguredMock(
                SerializerInterface::class,
                [
                    'deserialize' => $this->createConfiguredMock(
                        OrderWrapper::class,
                        [
                            'getData' => $this->createMock(Order::class),
                        ]
                    ),
                ]
            )
        );

        self::assertInstanceOf(
            OrderWrapper::class,
            $handler->deserialize('JSON')
        );
    }

    public function testHandleCollection()
    {
        $handler = new OrderHandler(
            $this->createConfiguredMock(
                SerializerInterface::class,
                [
                    'deserialize' => $this->createConfiguredMock(
                        OrderCollectionWrapper::class,
                        [
                            'getData' => [
                                $this->createMock(Order::class),
                            ],
                        ]
                    ),
                ]
            )
        );

        self::assertInstanceOf(
            OrderCollectionWrapper::class,
            $handler->deserializeCollection('JSON')
        );
    }

    public function testGetSupportedTypes()
    {
        $handler = new OrderHandler(
            $this->createMock(SerializerInterface::class)
        );

        self::assertContains(
            OrderInterface::class,
            $handler->getSupportedTypes()
        );
    }
}
