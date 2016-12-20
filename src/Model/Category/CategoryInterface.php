<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Category;

use Enm\ShopwareSdk\Model\RootModelInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface CategoryInterface extends RootModelInterface {

    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @param int $id
     * @return CategoryInterface
     */
    public function setId(int $id): CategoryInterface;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     * @return CategoryInterface
     */
    public function setName(string $name): CategoryInterface;

    /**
     * @return int
     */
    public function getParentId(): int;

    /**
     * @param int $parentId
     * @return CategoryInterface
     */
    public function setParentId(int $parentId): CategoryInterface;

}
