<?php
namespace Enm\ShopwareSdk\Model\Article;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface PropertyGroupInterface
{

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return PropertyGroupInterface
     */
    public function setId(int $id) : PropertyGroupInterface;

    /**
     * @return string
     */
    public function getName() : string;

    /**
     * @param string $name
     *
     * @return PropertyGroupInterface
     */
    public function setName(string $name) : PropertyGroupInterface;

    /**
     * @return int
     */
    public function getPosition() : int;

    /**
     * @param int $position
     *
     * @return PropertyGroupInterface
     */
    public function setPosition(int $position) : PropertyGroupInterface;

    /**
     * @return boolean
     */
    public function isComparable() : bool;

    /**
     * @param boolean $comparable
     *
     * @return PropertyGroupInterface
     */
    public function setComparable(bool $comparable) : PropertyGroupInterface;

    /**
     * @return int
     */
    public function getSortMode() : int;

    /**
     * @param int $sortMode
     *
     * @return PropertyGroupInterface
     */
    public function setSortMode(int $sortMode) : PropertyGroupInterface;
}
