<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Serializer;

/**
 * @author Philipp Marien <marien@eosnewmedia.de>
 */
interface TypeHandlerInterface
{
    /**
     * @return array
     */
    public function getSupportedTypes(): array;
}
