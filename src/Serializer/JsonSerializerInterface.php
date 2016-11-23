<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Serializer;

use Enm\ShopwareSdk\Model\Wrapper\CollectionWrapperInterface;
use Enm\ShopwareSdk\Model\Wrapper\WrapperInterface;

/**
 * @author Philipp Marien <marien@eosnewmedia.de>
 */
interface JsonSerializerInterface extends TypeHandlerInterface
{
    /**
     * @param WrapperInterface $data
     *
     * @return string
     */
    public function serialize(WrapperInterface $data): string;
    
    /**
     * @param CollectionWrapperInterface $data
     *
     * @return string
     */
    public function serializeCollection(CollectionWrapperInterface $data): string;
}
