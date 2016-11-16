<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk;

use Enm\ShopwareSdk\Endpoint\AddressEndpointInterface;
use Enm\ShopwareSdk\Endpoint\ArticleEndpointInterface;
use Enm\ShopwareSdk\Endpoint\CategoryEndpointInterface;
use Enm\ShopwareSdk\Endpoint\CountryEndpointInterface;
use Enm\ShopwareSdk\Endpoint\CustomerEndpointInterface;
use Enm\ShopwareSdk\Endpoint\CustomerGroupEndpointInterface;
use Enm\ShopwareSdk\Endpoint\MediaEndpointInterface;
use Enm\ShopwareSdk\Endpoint\OrderEndpointInterface;
use Enm\ShopwareSdk\Endpoint\PropertyGroupEndpointInterface;
use Enm\ShopwareSdk\Endpoint\VariantEndpointInterface;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class EntryPoint implements EntryPointInterface
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
     * EntryPoint constructor.
     *
     * @param string $baseUri
     * @param string $username
     * @param string $apiKey
     */
    public function __construct(string $baseUri, string $username, string $apiKey)
    {
        $this->baseUri  = $baseUri;
        $this->username = $username;
        $this->apiKey   = $apiKey;
    }

    /**
     * @param ClientInterface $httpClient
     *
     * @return EntryPoint
     */
    public function setHttpClient(ClientInterface $httpClient): EntryPoint
    {
        $this->httpClient = $httpClient;

        return $this;
    }

    /**
     * @return ClientInterface
     */
    private function httpClient(): ClientInterface
    {
        if (!$this->httpClient instanceof ClientInterface) {
            $this->httpClient = new Client();
        }

        return $this->httpClient;
    }

    /**
     * @return AddressEndpointInterface
     */
    public function addresses(): AddressEndpointInterface
    {
        // TODO: Implement addresses() method.
    }

    /**
     * @return ArticleEndpointInterface
     */
    public function articles(): ArticleEndpointInterface
    {
        // TODO: Implement articles() method.
    }

    /**
     * @return CategoryEndpointInterface
     */
    public function categories(): CategoryEndpointInterface
    {
        // TODO: Implement categories() method.
    }

    /**
     * @return CountryEndpointInterface
     */
    public function countries(): CountryEndpointInterface
    {
        // TODO: Implement countries() method.
    }

    /**
     * @return CustomerGroupEndpointInterface
     */
    public function customerGroups(): CustomerGroupEndpointInterface
    {
        // TODO: Implement customerGroups() method.
    }

    /**
     * @return CustomerEndpointInterface
     */
    public function customers(): CustomerEndpointInterface
    {
        // TODO: Implement customers() method.
    }

    /**
     * @return MediaEndpointInterface
     */
    public function media(): MediaEndpointInterface
    {
        // TODO: Implement media() method.
    }

    /**
     * @return OrderEndpointInterface
     */
    public function orders(): OrderEndpointInterface
    {
        // TODO: Implement orders() method.
    }

    /**
     * @return PropertyGroupEndpointInterface
     */
    public function propertyGroups(): PropertyGroupEndpointInterface
    {
        // TODO: Implement propertyGroups() method.
    }

    /**
     * @return VariantEndpointInterface
     */
    public function variants(): VariantEndpointInterface
    {
        // TODO: Implement variants() method.
    }
}
