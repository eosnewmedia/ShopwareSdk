<?<?php
 declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface LinkInterface
{

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return LinkInterface
     */
    public function setId(int $id) : LinkInterface;

    /**
     * @return int
     */
    public function getArticleId() : int;

    /**
     * @param int $articleId
     *
     * @return LinkInterface
     */
    public function setArticleId(int $articleId) : LinkInterface;

    /**
     * @return string
     */
    public function getName() : string;

    /**
     * @param string $name
     *
     * @return LinkInterface
     */
    public function setName(string $name) : LinkInterface;

    /**
     * @return string
     */
    public function getLink() : string;

    /**
     * @param string $link
     *
     * @return LinkInterface
     */
    public function setLink(string $link) : LinkInterface;

    /**
     * @return string
     */
    public function getTarget() : string;

    /**
     * @param string $target
     *
     * @return LinkInterface
     */
    public function setTarget(string $target) : LinkInterface;
}
