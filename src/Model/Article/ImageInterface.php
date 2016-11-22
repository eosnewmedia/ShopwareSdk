<?php
namespace Enm\ShopwareSdk\Model\Article;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface ImageInterface
{

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return ImageInterface
     */
    public function setId(int $id) : ImageInterface;

    /**
     * @return int
     */
    public function getArticleId() : int;

    /**
     * @param int $articleId
     *
     * @return ImageInterface
     */
    public function setArticleId(int $articleId) : ImageInterface;

    /**
     * @return string
     */
    public function getArticleDetailId() : string;

    /**
     * @param string $articleDetailId
     *
     * @return ImageInterface
     */
    public function setArticleDetailId(string $articleDetailId) : ImageInterface;

    /**
     * @return string
     */
    public function getDescription() : string;

    /**
     * @param string $description
     *
     * @return ImageInterface
     */
    public function setDescription(string $description) : ImageInterface;

    /**
     * @return string
     */
    public function getPath() : string;

    /**
     * @param string $path
     *
     * @return ImageInterface
     */
    public function setPath(string $path) : ImageInterface;

    /**
     * @return int
     */
    public function getMain() : int;

    /**
     * @param int $main
     *
     * @return ImageInterface
     */
    public function setMain(int $main) : ImageInterface;

    /**
     * @return int
     */
    public function getPosition() : int;

    /**
     * @param int $position
     *
     * @return ImageInterface
     */
    public function setPosition(int $position) : ImageInterface;

    /**
     * @return int
     */
    public function getWidth() : int;

    /**
     * @param int $width
     *
     * @return ImageInterface
     */
    public function setWidth(int $width) : ImageInterface;

    /**
     * @return int
     */
    public function getHeight() : int;

    /**
     * @param int $height
     *
     * @return ImageInterface
     */
    public function setHeight(int $height) : ImageInterface;

    /**
     * @return string
     */
    public function getRelations() : string;

    /**
     * @param string $relations
     *
     * @return ImageInterface
     */
    public function setRelations(string $relations) : ImageInterface;

    /**
     * @return string
     */
    public function getExtension() : string;

    /**
     * @param string $extension
     *
     * @return ImageInterface
     */
    public function setExtension(string $extension) : ImageInterface;

    /**
     * @return string
     */
    public function getParentId() : string;

    /**
     * @param string $parentId
     *
     * @return ImageInterface
     */
    public function setParentId(string $parentId) : ImageInterface;

    /**
     * @return int
     */
    public function getMediaId() : int;

    /**
     * @param int $mediaId
     *
     * @return ImageInterface
     */
    public function setMediaId(int $mediaId) : ImageInterface;
}
