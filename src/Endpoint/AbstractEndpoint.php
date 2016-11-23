<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Http\ClientInterface;
use Enm\ShopwareSdk\Serializer\JsonDeserializerInterface;
use Enm\ShopwareSdk\Serializer\JsonSerializerInterface;

/**
 * @author Philipp Marien <marien@eosnewmedia.de>
 */
abstract class AbstractEndpoint
{
    /**
     * @var ClientInterface
     */
    private $httpClient;
    
    /**
     * @var JsonSerializerInterface
     */
    private $serializer;
    
    /**
     * @var JsonDeserializerInterface
     */
    private $deserializer;
    
    /**
     * @param ClientInterface $httpClient
     * @param JsonSerializerInterface $serializer
     * @param JsonDeserializerInterface $deserializer
     */
    public function __construct(ClientInterface $httpClient, JsonSerializerInterface $serializer, JsonDeserializerInterface $deserializer)
    {
        $this->httpClient   = $httpClient;
        $this->serializer   = $serializer;
        $this->deserializer = $deserializer;
    }
    
    /**
     * @return ClientInterface
     */
    protected function shopware(): ClientInterface
    {
        return $this->httpClient;
    }
    
    /**
     * @return JsonSerializerInterface
     */
    protected function serializer(): JsonSerializerInterface
    {
        return $this->serializer;
    }
    
    /**
     * @return JsonDeserializerInterface
     */
    protected function deserializer(): JsonDeserializerInterface
    {
        return $this->deserializer;
    }
}
