<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Tests\Endpoint;

use Enm\ShopwareSdk\Endpoint\OrderEndpoint;
use Enm\ShopwareSdk\Http\ClientInterface;
use Enm\ShopwareSdk\Model\Order\OrderInterface;
use Enm\ShopwareSdk\Model\RootModelInterface;
use Enm\ShopwareSdk\Model\Wrapper\OrderCollectionWrapper;
use Enm\ShopwareSdk\Model\Wrapper\OrderWrapper;
use Enm\ShopwareSdk\Serializer\JsonDeserializerInterface;
use Enm\ShopwareSdk\Serializer\JsonSerializerInterface;
use PHPUnit\Framework\TestCase;

/**
 * @author Philipp Marien <marien@eosnewmedia.de>
 */
class OrderEndpointTest extends TestCase
{
    public function testFindAll()
    {
        $endpoint = new OrderEndpoint(
            $this->createMock(ClientInterface::class),
            $this->createMock(JsonSerializerInterface::class),
            $this->createConfiguredMock(
                JsonDeserializerInterface::class,
                [
                    'deserializeCollection' => $this->createMock(OrderCollectionWrapper::class),
                ]
            )
        );

        self::assertCount(0, $endpoint->findAll());
    }

    public function testFind()
    {
        $endpoint = new OrderEndpoint(
            $this->createMock(ClientInterface::class),
            $this->createMock(JsonSerializerInterface::class),
            $this->createConfiguredMock(
                JsonDeserializerInterface::class,
                [
                    'deserialize' => $this->createConfiguredMock(
                        OrderWrapper::class,
                        [
                            'getData' => $this->createMock(OrderInterface::class),
                        ]
                    ),
                ]
            )
        );

        $order = $endpoint->find(1);

        self::assertInstanceOf(OrderInterface::class, $order);
    }

    /**
     * @expectedException \LogicException
     */
    public function testFindAllInvalidObject()
    {
        $endpoint = new OrderEndpoint(
            $this->createMock(ClientInterface::class),
            $this->createMock(JsonSerializerInterface::class),
            $this->createConfiguredMock(
                JsonDeserializerInterface::class,
                [
                    'deserializeCollection' => $this->createConfiguredMock(
                        OrderCollectionWrapper::class,
                        [
                            'getData' => [$this->createMock(RootModelInterface::class)],
                        ]
                    ),
                ]
            )
        );

        $endpoint->findAll();
    }

    /**
     * @expectedException \LogicException
     */
    public function testFindInvalidObject()
    {
        $endpoint = new OrderEndpoint(
            $this->createMock(ClientInterface::class),
            $this->createMock(JsonSerializerInterface::class),
            $this->createConfiguredMock(
                JsonDeserializerInterface::class,
                [
                    'deserializeCollection' => $this->createMock(OrderWrapper::class),
                ]
            )
        );

        $endpoint->find(1);
    }
}
