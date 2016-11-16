<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Model\ArticleInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface ArticleEndpointInterface
{

    /**
     * @return ArticleInterface[]
     */
    public function findAll(): array;

    /**
     * @param int $id
     *
     * @return ArticleInterface
     */
    public function find(int $id): ArticleInterface;
}