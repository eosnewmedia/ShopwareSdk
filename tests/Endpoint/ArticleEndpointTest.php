<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Tests\Endpoint;

use Enm\ShopwareSdk\Endpoint\ArticleEndpoint;
use Enm\ShopwareSdk\Http\ClientInterface;
use Enm\ShopwareSdk\Model\ArticleInterface;
use Enm\ShopwareSdk\Model\RootModelInterface;
use Enm\ShopwareSdk\Response\HandlerInterface;
use PHPUnit\Framework\TestCase;

/**
 * @author Philipp Marien <marien@eosnewmedia.de>
 */
class ArticleEndpointTest extends TestCase
{
    public function testFindAll()
    {
        $endpoint = new ArticleEndpoint(
          $this->createMock(ClientInterface::class),
          $this->createConfiguredMock(
            HandlerInterface::class,
            [
              'handleCollection' => [
                $this->createMock(ArticleInterface::class),
              ],
            ]
          )
        );
        
        $orders = $endpoint->findAll();
        
        self::assertCount(1, $orders);
        self::assertInstanceOf(ArticleInterface::class, $orders[0]);
    }
    
    public function testFind()
    {
        $endpoint = new ArticleEndpoint(
          $this->createMock(ClientInterface::class),
          $this->createConfiguredMock(
            HandlerInterface::class,
            [
              'handle' => $this->createMock(ArticleInterface::class),
            ]
          )
        );
        
        $order = $endpoint->find(1);
        
        self::assertInstanceOf(ArticleInterface::class, $order);
    }
    
    /**
     * @expectedException \LogicException
     */
    public function testFindAllInvalidObject()
    {
        $endpoint = new ArticleEndpoint(
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
        $endpoint = new ArticleEndpoint(
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
