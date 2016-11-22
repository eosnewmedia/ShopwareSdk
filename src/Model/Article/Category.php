<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Category implements CategoryInterface
{

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $id;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $name;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
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
        return $this->name;
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
}
