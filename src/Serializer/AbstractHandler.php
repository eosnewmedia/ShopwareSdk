<?php
declare(strict_types=1);

namespace Enm\ShopwareSdk\Serializer;

use Enm\ShopwareSdk\Model\Wrapper\CollectionWrapperInterface;
use Enm\ShopwareSdk\Model\Wrapper\WrapperInterface;
use JMS\Serializer\SerializerInterface;

/**
 * @author Philipp Marien <marien@eosnewmedia.de>
 */
abstract class AbstractHandler implements JsonSerializerInterface, JsonDeserializerInterface
{
    /**
     * @var SerializerInterface
     */
    private $jmsSerializer;

    /**
     * @param SerializerInterface $serializer
     */
    public function __construct(SerializerInterface $serializer)
    {
        $this->jmsSerializer = $serializer;
    }

    /**
     * @return SerializerInterface
     */
    protected function jms(): SerializerInterface
    {
        return $this->jmsSerializer;
    }

    /**
     * @param string $json
     *
     * @return WrapperInterface
     * @throws \RuntimeException
     */
    public function deserialize(string $json): WrapperInterface
    {
        try {
            /** @var WrapperInterface $wrapper */
            $wrapper = $this->jms()->deserialize(
                $json,
                $this->wrapperClass(),
                'json'
            );
        } catch (\Exception $e) {
            throw new \RuntimeException('Error while deserialize "' . $json . '"', 0, $e);
        }

        return $wrapper;
    }

    /**
     * @param string $json
     *
     * @return CollectionWrapperInterface
     * @throws \RuntimeException
     */
    public function deserializeCollection(string $json): CollectionWrapperInterface
    {
        try {
            /** @var CollectionWrapperInterface $collectionWrapper */
            $collectionWrapper = $this->jms()->deserialize(
                $json,
                $this->collectionWrapperClass(),
                'json'
            );
        } catch (\Exception $e) {
            throw new \RuntimeException('Error while deserialize "' . $json . '"', 0, $e);
        }


        return $collectionWrapper;
    }

    /**
     * @param mixed $data
     *
     * @return array
     */
    public function serialize($data): array
    {
        return json_decode($this->jms()->serialize($data, 'json'), true);
    }

    /**
     * @return string
     */
    abstract protected function wrapperClass(): string;

    /**
     * @return string
     */
    abstract protected function collectionWrapperClass(): string;
}
