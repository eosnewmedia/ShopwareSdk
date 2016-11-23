<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Endpoint\Definition\ArticleEndpointInterface;
use Enm\ShopwareSdk\Model\Article\ArticleInterface;
use Enm\ShopwareSdk\Model\Wrapper\ArticleWrapper;

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
        
        $articleWrapper = $this->deserializer()
                               ->deserializeCollection(
                                 (string)$response->getBody()
                               );
        
        foreach ($articleWrapper->getData() as $article) {
            if (!$article instanceof ArticleInterface) {
                throw new \LogicException();
            }
        }
        
        return $articleWrapper->getData();
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
        
        $articleWrapper = $this->deserializer()
                               ->deserialize((string)$response->getBody());
        
        $article = $articleWrapper->getData();
        if (!$article instanceof ArticleInterface) {
            throw new \LogicException();
        }
        
        return $article;
    }
    
    /**
     * @param ArticleInterface $article
     *
     * @return ArticleEndpointInterface
     */
    public function save(ArticleInterface $article): ArticleEndpointInterface
    {
        $wrapper = new ArticleWrapper();
        $wrapper->setData($article);
        
        $data = $this->serializer()->serialize($wrapper);
        
        if ($article->getId() !== 0) {
            $this->shopware()
                 ->put('/api/articles/'.(string)$article->getId(), [], $data);
        } else {
            $this->shopware()->post('/api/articles', [], $data);
        }
        
        return $this;
    }
}
