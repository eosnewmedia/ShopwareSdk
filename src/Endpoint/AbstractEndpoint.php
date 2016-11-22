<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Http\ClientInterface;
use Enm\ShopwareSdk\Response\HandlerInterface;

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
     * @var HandlerInterface
     */
    private $responseHandler;
    
    /**
     * @param ClientInterface $httpClient
     * @param HandlerInterface $responseHandler
     */
    public function __construct(ClientInterface $httpClient, HandlerInterface $responseHandler)
    {
        $this->httpClient      = $httpClient;
        $this->responseHandler = $responseHandler;
    }
    
    /**
     * @return ClientInterface
     */
    protected function shopware(): ClientInterface
    {
        return $this->httpClient;
    }
    
    /**
     * @return HandlerInterface
     */
    protected function responseHandler(): HandlerInterface
    {
        return $this->responseHandler;
    }
}
