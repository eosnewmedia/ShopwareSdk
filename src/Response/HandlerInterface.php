<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Response;

use Enm\ShopwareSdk\Model\RootModelInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * @author Philipp Marien <marien@eosnewmedia.de>
 */
interface HandlerInterface
{
    /**
     * @param ResponseInterface $response
     *
     * @return RootModelInterface
     */
    public function handle(ResponseInterface $response): RootModelInterface;
    
    /**
     * @param ResponseInterface $response
     *
     * @return RootModelInterface[]
     */
    public function handleCollection(ResponseInterface $response): array;
    
    /**
     * @return array
     */
    public function getSupportedTypes(): array;
}
