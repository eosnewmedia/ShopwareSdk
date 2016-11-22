<?php
namespace Enm\ShopwareSdk\Model\Article;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface CategoryInterface
{

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return CategoryInterface
     */
    public function setId(int $id) : CategoryInterface;

    /**
     * @return string
     */
    public function getName() : string;

    /**
     * @param string $name
     *
     * @return CategoryInterface
     */
    public function setName(string $name) : CategoryInterface;
}