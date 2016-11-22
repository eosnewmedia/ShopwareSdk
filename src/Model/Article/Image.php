<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Image implements ImageInterface
{

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $id;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $articleId;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $articleDetailId;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $description;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $path;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $main;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $position;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $width;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $height;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $relations;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $extension;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $parentId;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $mediaId;

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
     * @return ImageInterface
     */
    public function setId(int $id): ImageInterface
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getArticleId(): int
    {
        return $this->articleId;
    }

    /**
     * @param int $articleId
     *
     * @return ImageInterface
     */
    public function setArticleId(int $articleId): ImageInterface
    {
        $this->articleId = $articleId;

        return $this;
    }

    /**
     * @return string
     */
    public function getArticleDetailId(): string
    {
        return $this->articleDetailId;
    }

    /**
     * @param string $articleDetailId
     *
     * @return ImageInterface
     */
    public function setArticleDetailId(string $articleDetailId): ImageInterface
    {
        $this->articleDetailId = $articleDetailId;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return ImageInterface
     */
    public function setDescription(string $description): ImageInterface
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $path
     *
     * @return ImageInterface
     */
    public function setPath(string $path): ImageInterface
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @return int
     */
    public function getMain(): int
    {
        return $this->main;
    }

    /**
     * @param int $main
     *
     * @return ImageInterface
     */
    public function setMain(int $main): ImageInterface
    {
        $this->main = $main;

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
     * @return ImageInterface
     */
    public function setPosition(int $position): ImageInterface
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     *
     * @return ImageInterface
     */
    public function setWidth(int $width): ImageInterface
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     *
     * @return ImageInterface
     */
    public function setHeight(int $height): ImageInterface
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @return string
     */
    public function getRelations(): string
    {
        return $this->relations;
    }

    /**
     * @param string $relations
     *
     * @return ImageInterface
     */
    public function setRelations(string $relations): ImageInterface
    {
        $this->relations = $relations;

        return $this;
    }

    /**
     * @return string
     */
    public function getExtension(): string
    {
        return $this->extension;
    }

    /**
     * @param string $extension
     *
     * @return ImageInterface
     */
    public function setExtension(string $extension): ImageInterface
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * @return string
     */
    public function getParentId(): string
    {
        return $this->parentId;
    }

    /**
     * @param string $parentId
     *
     * @return ImageInterface
     */
    public function setParentId(string $parentId): ImageInterface
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * @return int
     */
    public function getMediaId(): int
    {
        return $this->mediaId;
    }

    /**
     * @param int $mediaId
     *
     * @return ImageInterface
     */
    public function setMediaId(int $mediaId): ImageInterface
    {
        $this->mediaId = $mediaId;

        return $this;
    }
}
