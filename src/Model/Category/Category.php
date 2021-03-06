<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Category;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Category implements CategoryInterface
{

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id")
     */
    private $id;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    private $name;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("parentId")
     */
    private $parentId;

    /**
     * @return int
     */
    public function getId(): int
    {
        return (int)$this->id;
    }

    /**
     * @param int $id
     *
     * @return CategoryInterface
     */
    public function setId(int $id): CategoryInterface
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return (string)$this->name;
    }

    /**
     * @param string $name
     *
     * @return CategoryInterface
     */
    public function setName(string $name): CategoryInterface
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getParentId(): int
    {
        return (int)$this->parentId;
    }

    /**
     * @param int $parentId
     *
     * @return CategoryInterface
     */
    public function setParentId(int $parentId): CategoryInterface
    {
        $this->parentId = $parentId;

        return $this;
    }
}
