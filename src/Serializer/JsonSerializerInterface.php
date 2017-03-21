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
     * @param mixed $data
     *
     * @return array
     */
    public function serialize($data): array;
}
