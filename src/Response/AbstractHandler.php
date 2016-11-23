<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Response;

use Enm\ShopwareSdk\Model\RootModelInterface;
use Enm\ShopwareSdk\Model\Wrapper\CollectionWrapperInterface;
use Enm\ShopwareSdk\Model\Wrapper\WrapperInterface;
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
     * @param ResponseInterface $response
     *
     * @return RootModelInterface
     * @throws \Exception
     */
    public function handle(ResponseInterface $response): RootModelInterface
    {
        /** @var WrapperInterface $model */
        $model = $this->serializer()
                      ->deserialize(
                          (string)$response->getBody(),
                          $this->wrapperClass(),
                          'json'
                      );

        return $model->getData();
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
    abstract protected function wrapperClass(): string;

    /**
     * @param ResponseInterface $response
     *
     * @return RootModelInterface[]
     * @throws \Exception
     */
    public function handleCollection(ResponseInterface $response): array
    {
        /** @var CollectionWrapperInterface $model */
        $model = $this->serializer()
                       ->deserialize(
                           (string)$response->getBody(),
                           $this->collectionWrapperClass(),
                           'json'
                       );

        return $model->getData();
    }

    /**
     * @return string
     */
    abstract protected function collectionWrapperClass(): string;
}
