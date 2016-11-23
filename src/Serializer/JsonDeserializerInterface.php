<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Serializer;

use Enm\ShopwareSdk\Model\Wrapper\CollectionWrapperInterface;
use Enm\ShopwareSdk\Model\Wrapper\WrapperInterface;

/**
 * @author Philipp Marien <marien@eosnewmedia.de>
 */
interface JsonDeserializerInterface extends TypeHandlerInterface
{
    /**
     * @param string $json
     *
     * @return WrapperInterface
     */
    public function deserialize(string $json): WrapperInterface;
    
    /**
     * @param string $json
     *
     * @return CollectionWrapperInterface
     */
    public function deserializeCollection(string $json): CollectionWrapperInterface;
}
