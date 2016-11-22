<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk;

use Enm\ShopwareSdk\Endpoint\ArticleEndpoint;
use Enm\ShopwareSdk\Endpoint\Definition\ArticleEndpointInterface;
use Enm\ShopwareSdk\Endpoint\Definition\OrderEndpointInterface;
use Enm\ShopwareSdk\Endpoint\OrderEndpoint;
use Enm\ShopwareSdk\Http\ClientInterface;
use Enm\ShopwareSdk\Http\GuzzleAdapter;
use Enm\ShopwareSdk\Model\ArticleInterface;
use Enm\ShopwareSdk\Model\OrderInterface;
use Enm\ShopwareSdk\Response\ArticleHandler;
use Enm\ShopwareSdk\Response\HandlerInterface;
use Enm\ShopwareSdk\Response\OrderHandler;
use GuzzleHttp\Client;
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
     * @var HandlerInterface[]
     */
    private $responseHandlers = [];
    
    /**
     * @var ArticleEndpointInterface
     */
    private $articleEndpoint;
    
    /**
     * @var OrderEndpointInterface
     */
    private $orderEndpoint;
    
    /**
     * @param ClientInterface $httpClient
     */
    public function __construct(ClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }
    
    /**
     * @param SerializerInterface $serializer
     * @param string $baseUri
     * @param string $username
     * @param string $password
     *
     * @return EntryPoint
     */
    public static function buildDefault(SerializerInterface $serializer, string $baseUri, string $username, string $password): EntryPoint
    {
        $client = new GuzzleAdapter(new Client());
        $client->withConfig($baseUri, $username, $password);
        
        $entryPoint = new self($client);
        $entryPoint->addResponseHandler(new ArticleHandler($serializer));
        $entryPoint->addResponseHandler(new OrderHandler($serializer));
        
        return $entryPoint;
    }
    
    /**
     * @return ClientInterface
     */
    protected function httpClient(): ClientInterface
    {
        return $this->httpClient;
    }
    
    /**
     * @param string $type
     *
     * @return HandlerInterface
     * @throws \InvalidArgumentException
     */
    protected function handlerFor(string $type): HandlerInterface
    {
        if (!array_key_exists($type, $this->responseHandlers)) {
            throw new \InvalidArgumentException('No handler for '.$type);
        }
        
        return $this->responseHandlers[$type];
    }
    
    /**
     * @param HandlerInterface $handler
     *
     * @return EntryPoint
     */
    public function addResponseHandler(HandlerInterface $handler): EntryPoint
    {
        foreach ($handler->getSupportedTypes() as $type) {
            $this->responseHandlers[$type] = $handler;
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
              $this->handlerFor(ArticleInterface::class)
            );
        }
        
        return $this->articleEndpoint;
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
              $this->handlerFor(OrderInterface::class)
            );
        }
        
        return $this->orderEndpoint;
    }
}
