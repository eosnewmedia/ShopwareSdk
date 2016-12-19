<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk;

use Doctrine\Common\Annotations\AnnotationRegistry;
use Enm\ShopwareSdk\Endpoint\ArticleEndpoint;
use Enm\ShopwareSdk\Endpoint\CategoryEndpoint;
use Enm\ShopwareSdk\Endpoint\Definition\ArticleEndpointInterface;
use Enm\ShopwareSdk\Endpoint\Definition\CategoryEndpointInterface;
use Enm\ShopwareSdk\Endpoint\Definition\MediaEndpointInterface;
use Enm\ShopwareSdk\Endpoint\Definition\OrderEndpointInterface;
use Enm\ShopwareSdk\Endpoint\MediaEndpoint;
use Enm\ShopwareSdk\Endpoint\OrderEndpoint;
use Enm\ShopwareSdk\Http\ClientInterface;
use Enm\ShopwareSdk\Http\GuzzleAdapter;
use Enm\ShopwareSdk\Model\Article\ArticleInterface;
use Enm\ShopwareSdk\Model\Category\CategoryInterface;
use Enm\ShopwareSdk\Model\Media\MediaInterface;
use Enm\ShopwareSdk\Model\Order\OrderInterface;
use Enm\ShopwareSdk\Serializer\ArticleHandler;
use Enm\ShopwareSdk\Serializer\JsonDeserializerInterface;
use Enm\ShopwareSdk\Serializer\JsonSerializerInterface;
use Enm\ShopwareSdk\Serializer\OrderHandler;
use GuzzleHttp\Client;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class EntryPoint implements EntryPointInterface
{
    
    /**
     * @var ClientInterface
     */
    private $httpClient;
    
    /**
     * @var JsonSerializerInterface[]
     */
    private $serializers = [];
    
    /**
     * @var JsonDeserializerInterface[]
     */
    private $deserializers = [];
    
    /**
     * @var ArticleEndpointInterface
     */
    private $articleEndpoint;
    
    /**
     * @var OrderEndpointInterface
     */
    private $orderEndpoint;

    /**
     * @var CategoryEndpointInterface
     */
    private $categoryEndpoint;

    /**
     * @var MediaEndpointInterface
     */
    private $mediaEndpoint;
    
    /**
     * @param ClientInterface $httpClient
     */
    public function __construct(ClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }
    
    /**
     * @param string $baseUri
     * @param string $username
     * @param string $password
     *
     * @return EntryPoint
     */
    public static function buildDefault(string $baseUri, string $username, string $password): EntryPoint
    {
        AnnotationRegistry::registerAutoloadNamespace(
          'JMS\Serializer\Annotation',
          __DIR__.'/../vendor/jms/serializer/src'
        );
        
        $client = new GuzzleAdapter(new Client());
        $client->withConfig($baseUri, $username, $password);
        
        $entryPoint = new self($client);
        
        $jmsSerializer = SerializerBuilder::create()->build();
        
        $entryPoint->addDefaultSerializers($jmsSerializer);
        $entryPoint->addDefaultDeserializers($jmsSerializer);
        
        return $entryPoint;
    }
    
    /**
     * @param SerializerInterface $jmsSerializer
     *
     * @return EntryPoint
     */
    public function addDefaultSerializers(SerializerInterface $jmsSerializer): EntryPoint
    {
        $this->addSerializer(new ArticleHandler($jmsSerializer));
        $this->addSerializer(new OrderHandler($jmsSerializer));
        
        return $this;
    }
    
    /**
     * @param JsonSerializerInterface $serializer
     *
     * @return EntryPoint
     */
    public function addSerializer(JsonSerializerInterface $serializer): EntryPoint
    {
        foreach ($serializer->getSupportedTypes() as $type) {
            $this->serializers[$type] = $serializer;
        }
        
        return $this;
    }
    
    /**
     * @param SerializerInterface $jmsSerializer
     *
     * @return EntryPoint
     */
    public function addDefaultDeserializers(SerializerInterface $jmsSerializer): EntryPoint
    {
        $this->addDeserializer(new ArticleHandler($jmsSerializer));
        $this->addDeserializer(new OrderHandler($jmsSerializer));
        
        return $this;
    }
    
    /**
     * @param JsonDeserializerInterface $deserializer
     *
     * @return EntryPoint
     */
    public function addDeserializer(JsonDeserializerInterface $deserializer): EntryPoint
    {
        foreach ($deserializer->getSupportedTypes() as $type) {
            $this->deserializers[$type] = $deserializer;
        }
        
        return $this;
    }
    
    /**
     * @return ArticleEndpointInterface
     * @throws \InvalidArgumentException
     */
    public function articles(): ArticleEndpointInterface
    {
        if (!$this->articleEndpoint instanceof ArticleEndpointInterface) {
            $this->articleEndpoint = new ArticleEndpoint(
              $this->httpClient(),
              $this->serializerFor(ArticleInterface::class),
              $this->deserializerFor(ArticleInterface::class)
            );
        }
        
        return $this->articleEndpoint;
    }
    
    /**
     * @return ClientInterface
     */
    protected function httpClient(): ClientInterface
    {
        return $this->httpClient;
    }
    
    /**
     * @param string $class
     *
     * @return JsonSerializerInterface
     * @throws \InvalidArgumentException
     */
    protected function serializerFor(string $class): JsonSerializerInterface
    {
        if (!array_key_exists($class, $this->serializers)) {
            throw new \InvalidArgumentException('No serializer for '.$class);
        }
        
        return $this->serializers[$class];
    }
    
    /**
     * @param string $class
     *
     * @return JsonDeserializerInterface
     * @throws \InvalidArgumentException
     */
    protected function deserializerFor(string $class): JsonDeserializerInterface
    {
        if (!array_key_exists($class, $this->deserializers)) {
            throw new \InvalidArgumentException('No deserializer for '.$class);
        }
        
        return $this->deserializers[$class];
    }
    
    /**
     * @return OrderEndpointInterface
     * @throws \InvalidArgumentException
     */
    public function orders(): OrderEndpointInterface
    {
        if (!$this->orderEndpoint instanceof OrderEndpointInterface) {
            $this->orderEndpoint = new OrderEndpoint(
              $this->httpClient(),
              $this->serializerFor(OrderInterface::class),
              $this->deserializerFor(OrderInterface::class)
            );
        }
        
        return $this->orderEndpoint;
    }

    /**
     * @return CategoryEndpointInterface
     * @throws \InvalidArgumentException
     */
    public function categories(): CategoryEndpointInterface {
        if (!$this->categoryEndpoint instanceof CategoryEndpointInterface) {
            $this->categoryEndpoint = new CategoryEndpoint(
                $this->httpClient(),
                $this->serializerFor(CategoryInterface::class),
                $this->deserializerFor(CategoryInterface::class)
            );
        }

        return $this->categoryEndpoint;
    }

    /**
     * @return MediaEndpointInterface
     * @throws \InvalidArgumentException
     */
    public function media(): MediaEndpointInterface {
        if (!$this->mediaEndpoint instanceof MediaEndpointInterface) {
            $this->mediaEndpoint = new MediaEndpoint(
                $this->httpClient(),
                $this->serializerFor(MediaInterface::class),
                $this->deserializerFor(MediaInterface::class)
            );
        }
        return $this->mediaEndpoint;
    }
}
