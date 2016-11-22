<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Http;

use GuzzleHttp\ClientInterface as Guzzle;
use Psr\Http\Message\ResponseInterface;

/**
 * @author Philipp Marien <marien@eosnewmedia.de>
 */
class GuzzleHttpAdapter implements ClientInterface
{
    /**
     * @var string
     */
    private $baseUri = '';
    
    /**
     * @var string
     */
    private $username = '';
    
    /**
     * @var string
     */
    private $password = '';
    
    /**
     * @var Guzzle
     */
    private $guzzleClient;
    
    /**
     * @param Guzzle $guzzleClient
     */
    public function __construct(Guzzle $guzzleClient)
    {
        $this->guzzleClient = $guzzleClient;
    }
    
    
    /**
     * @param string $baseUri
     * @param string $username
     * @param string $password
     *
     * @return ClientInterface
     */
    public function withConfig(string $baseUri, string $username, string $password): ClientInterface
    {
        $this->baseUri  = $baseUri;
        $this->username = $username;
        $this->password = $password;
        
        return $this;
    }
    
    /**
     * @param string $path
     * @param array $query
     *
     * @return ResponseInterface
     * @throws \Exception
     */
    public function get(string $path, array $query = []): ResponseInterface
    {
        return $this->request('GET', $path, $query);
    }
    
    /**
     * @param string $path
     * @param array $query
     * @param array $body
     *
     * @return ResponseInterface
     * @throws \Exception
     */
    public function post(string $path, array $query = [], array $body = []): ResponseInterface
    {
        return $this->request('POST', $path, $query, $body);
    }
    
    /**
     * @param string $path
     * @param array $query
     * @param array $body
     *
     * @return ResponseInterface
     * @throws \Exception
     */
    public function put(string $path, array $query = [], array $body = []): ResponseInterface
    {
        return $this->request('PUT', $path, $query, $body);
    }
    
    /**
     * @param string $path
     * @param array $query
     *
     * @return ResponseInterface
     * @throws \Exception
     */
    public function delete(string $path, array $query = []): ResponseInterface
    {
        return $this->request('DELETE', $path, $query);
    }
    
    /**
     * @param string $method
     * @param string $path
     * @param array $query
     * @param array $body
     *
     * @return ResponseInterface
     * @throws \Exception
     */
    private function request(string $method, string $path, array $query = [], array $body = []): ResponseInterface
    {
        $response = $this->guzzleClient->request(
          $method,
          $path,
          [
            'base_uri'    => $this->baseUri,
            'auth'        => [$this->username, $this->password, 'digest'],
            'json'        => $body,
            'query'       => $query,
            'http_errors' => false,
          ]
        );
        
        $this->handleResponse($response);
        
        return $response;
    }
    
    /**
     * @param ResponseInterface $response
     *
     * @return GuzzleHttpAdapter
     * @throws \Exception
     */
    private function handleResponse(ResponseInterface $response): GuzzleHttpAdapter
    {
        if ($response->getStatusCode() >= 400) {
            throw new \InvalidArgumentException((string)$response->getBody());
        }
        
        return $this;
    }
}
