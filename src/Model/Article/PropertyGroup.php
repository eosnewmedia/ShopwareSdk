<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class PropertyGroup implements PropertyGroupInterface
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var
     */
    private $name;

    /**
     * @var int
     */
    private $position;

    /**
     * @var bool
     */
    private $comparable;

    /**
     * @var int
     */
    private $sortMode;

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
     * @return PropertyGroupInterface
     */
    public function setId(int $id): PropertyGroupInterface
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return PropertyGroupInterface
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @param int $position
     *
     * @return PropertyGroupInterface
     */
    public function setPosition(int $position): PropertyGroupInterface
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isComparable(): bool
    {
        return $this->comparable;
    }

    /**
     * @param boolean $comparable
     *
     * @return PropertyGroupInterface
     */
    public function setComparable(bool $comparable): PropertyGroupInterface
    {
        $this->comparable = $comparable;

        return $this;
    }

    /**
     * @return int
     */
    public function getSortMode(): int
    {
        return $this->sortMode;
    }

    /**
     * @param int $sortMode
     *
     * @return PropertyGroupInterface
     */
    public function setSortMode(int $sortMode): PropertyGroupInterface
    {
        $this->sortMode = $sortMode;

        return $this;
    }
}
