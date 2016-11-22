<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Response;

use Enm\ShopwareSdk\Model\Article\Article;
use Enm\ShopwareSdk\Model\Article\ArticleInterface;

/**
 * @author Philipp Marien <marien@eosnewmedia.de>
 */
class ArticleHandler extends AbstractHandler
{
    /**
     * @return string
     */
    protected function modelClass(): string
    {
        return Article::class;
    }
    
    /**
     * @return array
     */
    public function getSupportedTypes(): array
    {
        return [ArticleInterface::class];
    }
}
