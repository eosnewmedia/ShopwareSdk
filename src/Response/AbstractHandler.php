<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Response;

use Enm\ShopwareSdk\Model\RootModelInterface;
use JMS\Serializer\SerializerInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * @author Philipp Marien <marien@eosnewmedia.de>
 */
abstract class AbstractHandler implements HandlerInterface
{
    /**
     * @var SerializerInterface
     */
    private $serializer;
    
    /**
     * @param SerializerInterface $serializer
     */
    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }
    
    /**
     * @return SerializerInterface
     */
    protected function serializer(): SerializerInterface
    {
        return $this->serializer;
    }
    
    /**
     * @return string
     */
    abstract protected function modelClass(): string;
    
    /**
     * @param ResponseInterface $response
     *
     * @return RootModelInterface
     * @throws \Exception
     */
    public function handle(ResponseInterface $response): RootModelInterface
    {
        /** @var RootModelInterface $model */
        $model = $this->serializer()
                      ->deserialize(
                        (string)$response->getBody(),
                        $this->modelClass(),
                        'json'
                      );
        
        return $model;
    }
    
    /**
     * @param ResponseInterface $response
     *
     * @return RootModelInterface[]
     * @throws \Exception
     */
    public function handleCollection(ResponseInterface $response): array
    {
        $models = $this->serializer()
                       ->deserialize(
                         (string)$response->getBody(),
                         'array<'.$this->modelClass().'>',
                         'json'
                       );
        
        return $models;
    }
}
