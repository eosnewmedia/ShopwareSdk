<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Image implements ImageInterface
{

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $id;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $articleId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $articleDetailId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $description;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $path;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $main;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $position;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $width;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $height;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $relations;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $extension;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $parentId;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $mediaId;

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
        return (int)$this->articleId;
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
        return (string)$this->articleDetailId;
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
        return (string)$this->description;
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
        return (string)$this->path;
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
        return (int)$this->main;
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
        return (int)$this->position;
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
        return (int)$this->width;
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
        return (int)$this->height;
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
        return (string)$this->relations;
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
        return (string)$this->extension;
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
        return (string)$this->parentId;
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
        return (int)$this->mediaId;
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
