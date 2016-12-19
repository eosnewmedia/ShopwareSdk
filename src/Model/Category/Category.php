<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Category;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Category implements CategoryInterface {

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id) {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @param string $name
     * @return CategoryInterface
     */
    public function setName(string $name): CategoryInterface {
        $this->name = $name;
        return $this;
    }
}
