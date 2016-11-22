<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Tests\Response;

use Enm\ShopwareSdk\Model\Order\Order;
use Enm\ShopwareSdk\Model\Order\OrderInterface;
use Enm\ShopwareSdk\Response\OrderHandler;
use JMS\Serializer\SerializerInterface;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;

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
              'deserialize' => $this->createMock(Order::class),
            ]
          )
        );
        
        self::assertInstanceOf(
          Order::class,
          $handler->handle($this->createMock(ResponseInterface::class))
        );
    }
    
    public function testHandleCollection()
    {
        $handler = new OrderHandler(
          $this->createConfiguredMock(
            SerializerInterface::class,
            [
              'deserialize' => [$this->createMock(Order::class)],
            ]
          )
        );
        
        self::assertInstanceOf(
          Order::class,
          $handler->handleCollection($this->createMock(ResponseInterface::class))[0]
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
