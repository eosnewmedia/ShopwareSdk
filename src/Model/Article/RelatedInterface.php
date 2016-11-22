<?php
namespace Enm\ShopwareSdk\Model\Article;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface RelatedInterface
{

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return RelatedInterface
     */
    public function setId(int $id) : RelatedInterface;

    /**
     * @return string
     */
    public function getName() : string;

    /**
     * @param string $name
     *
     * @return RelatedInterface
     */
    public function setName(string $name) : RelatedInterface;
}
