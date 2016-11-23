<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Wrapper;

use Enm\ShopwareSdk\Model\RootModelInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface WrapperInterface
{

    /**
     * @return RootModelInterface
     */
    public function getData(): RootModelInterface;

    /**
     * @param RootModelInterface $model
     *
     * @return WrapperInterface
     */
    public function setData(RootModelInterface $model): WrapperInterface;
}
