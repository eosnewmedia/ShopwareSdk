<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Serializer;

use Enm\ShopwareSdk\Model\Wrapper\CollectionWrapperInterface;
use Enm\ShopwareSdk\Model\Wrapper\WrapperInterface;

/**
 * @author Nicklas Reincke <reincke@eosnewmedia.de>
 */
class NullJsonSerializer implements JsonSerializerInterface, JsonDeserializerInterface
{

    /**
     * @param mixed $data
     *
     * @return array
     *
     * @throws \LogicException
     */
    public function serialize($data): array
    {
        throw new \LogicException('This method should not be called!');
    }

    /**
     * @param string $json
     *
     * @return WrapperInterface
     *
     * @throws \LogicException
     */
    public function deserialize(string $json): WrapperInterface
    {
        throw new \LogicException('This method should not be called!');
    }

    /**
     * @param string $json
     *
     * @return CollectionWrapperInterface
     *
     * @throws \LogicException
     */
    public function deserializeCollection(string $json): CollectionWrapperInterface
    {
        throw new \LogicException('This method should not be called!');
    }

    /**
     * @return array
     *
     * @throws \LogicException
     */
    public function getSupportedTypes(): array
    {
        throw new \LogicException('This method should not be called!');
    }

}
