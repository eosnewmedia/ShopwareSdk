<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Tests\Response;

use Enm\ShopwareSdk\Model\Article\Article;
use Enm\ShopwareSdk\Model\Article\ArticleInterface;
use Enm\ShopwareSdk\Response\ArticleHandler;
use JMS\Serializer\SerializerInterface;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;

/**
 * @author Philipp Marien <marien@eosnewmedia.de>
 */
class ArticleHandlerTest extends TestCase
{
    
    public function testHandle()
    {
        $handler = new ArticleHandler(
          $this->createConfiguredMock(
            SerializerInterface::class,
            [
              'deserialize' => $this->createMock(Article::class),
            ]
          )
        );
        
        self::assertInstanceOf(
          Article::class,
          $handler->handle($this->createMock(ResponseInterface::class))
        );
    }
    
    public function testHandleCollection()
    {
        $handler = new ArticleHandler(
          $this->createConfiguredMock(
            SerializerInterface::class,
            [
              'deserialize' => [$this->createMock(Article::class)],
            ]
          )
        );
        
        self::assertInstanceOf(
          Article::class,
          $handler->handleCollection($this->createMock(ResponseInterface::class))[0]
        );
    }
    
    public function testGetSupportedTypes()
    {
        $handler = new ArticleHandler(
          $this->createMock(SerializerInterface::class)
        );
        
        self::assertContains(
          ArticleInterface::class,
          $handler->getSupportedTypes()
        );
    }
}
