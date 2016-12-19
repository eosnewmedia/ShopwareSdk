<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Category;

use Enm\ShopwareSdk\Model\RootModelInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface CategoryInterface extends RootModelInterface {

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     * @return CategoryInterface
     */
    public function setName(string $name): CategoryInterface;
}
