<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Tests\Endpoint;

use Enm\ShopwareSdk\Endpoint\OrderEndpoint;
use Enm\ShopwareSdk\Http\ClientInterface;
use Enm\ShopwareSdk\Model\Order\OrderInterface;
use Enm\ShopwareSdk\Model\RootModelInterface;
use Enm\ShopwareSdk\Response\HandlerInterface;
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
          $this->createConfiguredMock(
            HandlerInterface::class,
            [
              'handleCollection' => [
                $this->createMock(OrderInterface::class),
              ],
            ]
          )
        );
        
        $orders = $endpoint->findAll();
        
        self::assertCount(1, $orders);
        self::assertInstanceOf(OrderInterface::class, $orders[0]);
    }
    
    public function testFind()
    {
        $endpoint = new OrderEndpoint(
          $this->createMock(ClientInterface::class),
          $this->createConfiguredMock(
            HandlerInterface::class,
            [
              'handle' => $this->createMock(OrderInterface::class),
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
          $this->createConfiguredMock(
            HandlerInterface::class,
            [
              'handleCollection' => [
                $this->createMock(RootModelInterface::class),
              ],
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
          $this->createConfiguredMock(
            HandlerInterface::class,
            [
              'handle' => $this->createMock(RootModelInterface::class),
            ]
          )
        );
        
        $endpoint->find(1);
    }
}
