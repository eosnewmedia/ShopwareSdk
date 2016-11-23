<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Tests;

use Enm\ShopwareSdk\Endpoint\Definition\ArticleEndpointInterface;
use Enm\ShopwareSdk\Endpoint\Definition\OrderEndpointInterface;
use Enm\ShopwareSdk\EntryPoint;
use Enm\ShopwareSdk\EntryPointInterface;
use Enm\ShopwareSdk\Http\ClientInterface;
use Enm\ShopwareSdk\Model\Article\ArticleInterface;
use Enm\ShopwareSdk\Model\Order\OrderInterface;
use Enm\ShopwareSdk\Serializer\JsonDeserializerInterface;
use Enm\ShopwareSdk\Serializer\JsonSerializerInterface;
use JMS\Serializer\SerializerInterface;
use PHPUnit\Framework\TestCase;

/**
 * @author Philipp Marien <marien@eosnewmedia.de>
 */
class EntryPointTest extends TestCase
{
    public function testEntryPoint()
    {
        $entryPoint = new EntryPoint($this->createMock(ClientInterface::class));
        
        self::assertInstanceOf(EntryPointInterface::class, $entryPoint);
    }
    
    public function testArticles()
    {
        $entryPoint = new EntryPoint($this->createMock(ClientInterface::class));
        
        $entryPoint->addSerializer(
          $this->createConfiguredMock(
            JsonSerializerInterface::class,
            ['getSupportedTypes' => [ArticleInterface::class]]
          )
        );
        
        $entryPoint->addDeserializer(
          $this->createConfiguredMock(
            JsonDeserializerInterface::class,
            ['getSupportedTypes' => [ArticleInterface::class]]
          )
        );
        
        self::assertInstanceOf(
          ArticleEndpointInterface::class,
          $entryPoint->articles()
        );
        
        self::assertSame($entryPoint->articles(), $entryPoint->articles());
    }
    
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testArticlesWithoutResponseHandler()
    {
        $entryPoint = new EntryPoint($this->createMock(ClientInterface::class));
        $entryPoint->articles();
    }
    
    public function testOrders()
    {
        $entryPoint = new EntryPoint($this->createMock(ClientInterface::class));
        
        $entryPoint->addSerializer(
          $this->createConfiguredMock(
            JsonSerializerInterface::class,
            ['getSupportedTypes' => [OrderInterface::class]]
          )
        );
        
        $entryPoint->addDeserializer(
          $this->createConfiguredMock(
            JsonDeserializerInterface::class,
            ['getSupportedTypes' => [OrderInterface::class]]
          )
        );
        
        self::assertInstanceOf(
          OrderEndpointInterface::class,
          $entryPoint->orders()
        );
        
        self::assertSame($entryPoint->orders(), $entryPoint->orders());
    }
    
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testOrdersWithoutSerializer()
    {
        $entryPoint = new EntryPoint($this->createMock(ClientInterface::class));
        $entryPoint->addDefaultDeserializers($this->createMock(SerializerInterface::class));
        $entryPoint->orders();
    }
    
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testOrdersWithoutDeserializer()
    {
        $entryPoint = new EntryPoint($this->createMock(ClientInterface::class));
        $entryPoint->addDefaultSerializers($this->createMock(SerializerInterface::class));
        $entryPoint->orders();
    }
    
    public function testDefaultEntryPoint()
    {
        $entryPoint = EntryPoint::buildDefault(
          'http://example.com',
          'test',
          'test56'
        );
        
        self::assertInstanceOf(EntryPointInterface::class, $entryPoint);
        self::assertInstanceOf(
          ArticleEndpointInterface::class,
          $entryPoint->articles()
        );
        self::assertInstanceOf(
          OrderEndpointInterface::class,
          $entryPoint->orders()
        );
    }
}
