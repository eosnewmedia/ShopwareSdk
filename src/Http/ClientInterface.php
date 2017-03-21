<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Http;

use Psr\Http\Message\ResponseInterface;

/**
 * @author Philipp Marien <marien@eosnewmedia.de>
 */
interface ClientInterface
{
    /**
     * @param string $baseUri
     * @param string $username
     * @param string $password
     *
     * @return ClientInterface
     */
    public function withConfig(string $baseUri, string $username, string $password): ClientInterface;

    /**
     * @param string $path
     * @param array $query
     *
     * @return ResponseInterface
     */
    public function get(string $path, array $query = []): ResponseInterface;

    /**
     * @param string $path
     * @param array $query
     * @param array $body
     *
     * @return ResponseInterface
     */
    public function post(string $path, array $query = [], array $body = []): ResponseInterface;

    /**
     * @param string $path
     * @param array $query
     * @param array $body
     *
     * @return ResponseInterface
     */
    public function put(string $path, array $query = [], array $body = []): ResponseInterface;

    /**
     * @param string $path
     * @param array $query
     *
     * @return ResponseInterface
     */
    public function delete(string $path, array $query = []): ResponseInterface;
}
