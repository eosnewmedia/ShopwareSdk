<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface SimilarInterface
{

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return SimilarInterface
     */
    public function setId(int $id) : SimilarInterface;

    /**
     * @return string
     */
    public function getName() : string;

    /**
     * @param string $name
     *
     * @return SimilarInterface
     */
    public function setName(string $name) : SimilarInterface;
}
