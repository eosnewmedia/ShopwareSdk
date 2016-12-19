<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Endpoint;

use Enm\ShopwareSdk\Endpoint\Definition\ArticleEndpointInterface;
use Enm\ShopwareSdk\Model\Article\ArticleInterface;

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
        $data = $this->serializer()->serialize($article);

        if ($article->getId() !== 0) {
            $this->shopware()
                 ->put('/api/articles/'.(string)$article->getId(), [], $data);
        } else {
            $this->shopware()->post('/api/articles', [], $data);
        }

        return $this;
    }

    /**
     * @param ArticleInterface $article
     *
     * @return ArticleEndpointInterface
     */
    public function delete(ArticleInterface $article): ArticleEndpointInterface
    {
        $this->shopware()->delete('/api/articles/'.(string)$article->getId());

        return $this;
    }

    /**
     * @param string $articleNumber
     *
     * @return ArticleInterface
     * @throws \LogicException
     */
    public function findByArticleNumber(string $articleNumber): ArticleInterface {

        $response = $this->shopware()->get('/api/articles/' . $articleNumber, ['useNumberAsId' => 'true']);

        $articleWrapper = $this->deserializer()
            ->deserialize((string)$response->getBody());

        $article = $articleWrapper->getData();
        if (!$article instanceof ArticleInterface) {
            throw new \LogicException();
        }

        return $article;
    }
}
