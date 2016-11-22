<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Endpoint\Definition\ArticleEndpointInterface;
use Enm\ShopwareSdk\Model\ArticleInterface;

/**
 * @author Philipp Marien <marien@eosnewmedia.de>
 */
class ArticleEndpoint extends AbstractEndpoint implements ArticleEndpointInterface
{
    /**
     * @return ArticleInterface[]
     * @throws \LogicException
     */
    public function findAll(): array
    {
        $response = $this->shopware()->get('/api/articles');
        
        $articles = $this->responseHandler()->handleCollection($response);
        
        foreach ($articles as $article) {
            if (!$article instanceof ArticleInterface) {
                throw new \LogicException();
            }
        }
        
        return $articles;
    }
    
    /**
     * @param int $id
     *
     * @return ArticleInterface
     * @throws \LogicException
     */
    public function find(int $id): ArticleInterface
    {
        $response = $this->shopware()->get('/api/articles/'.(string)$id);
        
        $article = $this->responseHandler()->handle($response);
        if (!$article instanceof ArticleInterface) {
            throw new \LogicException();
        }
        
        return $article;
    }
}
