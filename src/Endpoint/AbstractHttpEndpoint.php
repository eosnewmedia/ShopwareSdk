<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use GuzzleHttp\ClientInterface;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
abstract class AbstractHttpEndpoint
{

    /**
     * @var string
     */
    private $baseUri;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var ClientInterface
     */
    private $httpClient;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * AbstractHttpEndpoint constructor.
     *
     * @param string          $baseUri
     * @param string          $username
     * @param string          $apiKey
     * @param ClientInterface $httpClient
     */
    public function __construct(string $baseUri, string $username, string $apiKey, ClientInterface $httpClient)
    {
        $this->baseUri    = $baseUri;
        $this->username   = $username;
        $this->apiKey     = $apiKey;
        $this->httpClient = $httpClient;
    }

    /**
     * @param string $method
     * @param string $path
     * @param array  $body
     *
     * @return string
     * @throws \Exception
     */
    protected function request(string $method, string $path, array $body = []): string
    {
        $response = $this->httpClient->request(
            $method,
            $this->baseUri.$path,
            [
                'auth'        => [$this->username, $this->apiKey, 'digest'],
                'json'        => $body,
                'http_errors' => false,
            ]
        );
        $this->handleResponse($response);

        return (string)$response->getBody();
    }

    protected function serializer(): Serializer
    {
        if (!$this->serializer instanceof Serializer) {
            $this->serializer = new Serializer([new PropertyNormalizer()], [new JsonEncoder()]);
        }

        return $this->serializer;
    }

    /**
     * @param ResponseInterface $response
     *
     * @return AbstractHttpEndpoint
     * @throws \Exception
     */
    private function handleResponse(ResponseInterface $response): AbstractHttpEndpoint
    {
        if ($response->getStatusCode() >= 400) {
            throw new \InvalidArgumentException((string)$response->getBody());
        }

        return $this;
    }
}
