<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint\Definition;

use Enm\ShopwareSdk\Model\Article\ArticleInterface;

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
    
    /**
     * @param ArticleInterface $article
     *
     * @return ArticleInterface
     */
    public function save(ArticleInterface $article): ArticleInterface;

    /**
     * @param ArticleInterface $article
     *
     * @return ArticleEndpointInterface
     */
    public function delete(ArticleInterface $article): ArticleEndpointInterface;

    /**
     * @param string $articleNumber
     *
     * @return ArticleInterface
     */
    public function findByArticleNumber(string $articleNumber): ArticleInterface;
}
