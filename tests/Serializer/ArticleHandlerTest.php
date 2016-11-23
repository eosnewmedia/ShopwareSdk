<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Tests\Serializer;

use Enm\ShopwareSdk\Model\Article\Article;
use Enm\ShopwareSdk\Model\Article\ArticleInterface;
use Enm\ShopwareSdk\Model\Wrapper\ArticleCollectionWrapper;
use Enm\ShopwareSdk\Model\Wrapper\ArticleWrapper;
use Enm\ShopwareSdk\Serializer\ArticleHandler;
use JMS\Serializer\SerializerInterface;
use PHPUnit\Framework\TestCase;

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
              'deserialize' => $this->createConfiguredMock(
                ArticleWrapper::class,
                [
                  'getData' => $this->createMock(Article::class),
                ]
              ),
            ]
          )
        );
        
        self::assertInstanceOf(
          ArticleWrapper::class,
          $handler->deserialize('JSON DUMMY')
        );
    }
    
    public function testHandleCollection()
    {
        $handler = new ArticleHandler(
          $this->createConfiguredMock(
            SerializerInterface::class,
            [
              'deserialize' => $this->createConfiguredMock(
                ArticleCollectionWrapper::class,
                [
                  'getData' => [
                    $this->createMock(Article::class),
                  ],
                ]
              ),
            ]
          )
        );
        
        self::assertInstanceOf(
          ArticleCollectionWrapper::class,
          $handler->deserializeCollection('JSON DUMMY')
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
