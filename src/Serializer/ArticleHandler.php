<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Serializer;

use Enm\ShopwareSdk\Model\Article\ArticleInterface;
use Enm\ShopwareSdk\Model\Wrapper\ArticleCollectionWrapper;
use Enm\ShopwareSdk\Model\Wrapper\ArticleWrapper;

/**
 * @author Philipp Marien <marien@eosnewmedia.de>
 */
class ArticleHandler extends AbstractHandler
{
    /**
     * @return string
     */
    protected function wrapperClass(): string
    {
        return ArticleWrapper::class;
    }

    /**
     * @return string
     */
    protected function collectionWrapperClass(): string
    {
        return ArticleCollectionWrapper::class;
    }

    /**
     * @return array
     */
    public function getSupportedTypes(): array
    {
        return [ArticleInterface::class];
    }
}
