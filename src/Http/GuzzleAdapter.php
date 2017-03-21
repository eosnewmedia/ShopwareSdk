<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Http;

use GuzzleHttp\ClientInterface as Guzzle;
use Psr\Http\Message\ResponseInterface;

/**
 * @author Philipp Marien <marien@eosnewmedia.de>
 * @author Nicklas Reincke <reincke@eosnewmedia.de>
 */
class GuzzleAdapter implements ClientInterface
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
     *
     * @throws \Exception
     * @throws \InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     *
     * @throws \Exception
     * @throws \InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     *
     * @throws \Exception
     * @throws \InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     *
     * @throws \Exception
     * @throws \InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     *
     * @throws \Exception
     * @throws \InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    private function request(string $method, string $path, array $query = [], array $body = []): ResponseInterface
    {
        $request = [
            'base_uri'    => $this->baseUri,
            'auth'        => [$this->username, $this->password, 'digest'],
            'http_errors' => false,
        ];

        if (count($query) > 0) {
            $request['query'] = $query;
        }

        if (count($body) > 0) {
            $request['json'] = $body;
        }

        $response = null;

        // Threefold request attempt to bypass possible non-reproducible errors.
        for ($i = 0; $i < 3; $i++) {

            $response = $this->guzzleClient->request(
                $method,
                $path,
                $request
            );

            if ($response->getStatusCode() < 400) {
                return $response;
            }
        }

        throw new \InvalidArgumentException((string)$response->getBody());
    }

}
