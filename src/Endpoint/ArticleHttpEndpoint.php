<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Model\ArticleInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class ArticleHttpEndpoint extends AbstractHttpEndpoint implements ArticleEndpointInterface
{

    /**
     * @return ArticleInterface[]
     */
    public function findAll(): array
    {
        $json = $this->request('GET', '/api/articles');

        return $this->serializer()->deserialize($json, '', 'json');
    }

    /**
     * @param int $id
     *
     * @return ArticleInterface
     */
    public function find(int $id): ArticleInterface
    {
        $json = $this->request('GET', '/api/articles/'.$id);

        return $this->serializer()->deserialize($json, '', 'json');
    }
}
