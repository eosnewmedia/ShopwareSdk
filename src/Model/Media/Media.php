<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Media;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Media implements MediaInterface {
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $articleId;

    /**
     * @var int
     */
    private $articleDetailId;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $path;

    /**
     * @var int
     */
    private $main;

    /**
     * @var int
     */
    private $position;

    /**
     * @var int
     */
    private $width;

    /**
     * @var int
     */
    private $height;

    /**
     * @var string
     */
    private $relations;

    /**
     * @var string
     */
    private $extension;

    /**
     * @var int
     */
    private $parentId;

    /**
     * @var int
     */
    private $mediaId;

    /**
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * @param int $id
     * @return MediaInterface
     */
    public function setId(int $id): MediaInterface {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getArticleId(): int {
        return $this->articleId;
    }

    /**
     * @param int $articleId
     * @return MediaInterface
     */
    public function setArticleId(int $articleId): MediaInterface {
        $this->articleId = $articleId;
        return $this;
    }

    /**
     * @return int
     */
    public function getArticleDetailId(): int {
        return $this->articleDetailId;
    }

    /**
     * @param int $articleDetailId
     * @return MediaInterface
     */
    public function setArticleDetailId(int $articleDetailId): MediaInterface {
        $this->articleDetailId = $articleDetailId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string {
        return $this->description;
    }

    /**
     * @param string $description
     * @return MediaInterface
     */
    public function setDescription(string $description): MediaInterface {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getPath(): string {
        return $this->path;
    }

    /**
     * @param string $path
     * @return MediaInterface
     */
    public function setPath(string $path): MediaInterface {
        $this->path = $path;
        return $this;
    }

    /**
     * @return int
     */
    public function getMain(): int {
        return $this->main;
    }

    /**
     * @param int $main
     * @return MediaInterface
     */
    public function setMain(int $main): MediaInterface {
        $this->main = $main;
        return $this;
    }

    /**
     * @return int
     */
    public function getPosition(): int {
        return $this->position;
    }

    /**
     * @param int $position
     * @return MediaInterface
     */
    public function setPosition(int $position): MediaInterface {
        $this->position = $position;
        return $this;
    }

    /**
     * @return int
     */
    public function getWidth(): int {
        return $this->width;
    }

    /**
     * @param int $width
     * @return MediaInterface
     */
    public function setWidth(int $width): MediaInterface {
        $this->width = $width;
        return $this;
    }

    /**
     * @return int
     */
    public function getHeight(): int {
        return $this->height;
    }

    /**
     * @param int $height
     * @return MediaInterface
     */
    public function setHeight(int $height): MediaInterface {
        $this->height = $height;
        return $this;
    }

    /**
     * @return string
     */
    public function getRelations(): string {
        return $this->relations;
    }

    /**
     * @param string $relations
     * @return MediaInterface
     */
    public function setRelations(string $relations): MediaInterface {
        $this->relations = $relations;
        return $this;
    }

    /**
     * @return string
     */
    public function getExtension(): string {
        return $this->extension;
    }

    /**
     * @param string $extension
     * @return MediaInterface
     */
    public function setExtension(string $extension): MediaInterface {
        $this->extension = $extension;
        return $this;
    }

    /**
     * @return int
     */
    public function getParentId(): int {
        return $this->parentId;
    }

    /**
     * @param int $parentId
     * @return MediaInterface
     */
    public function setParentId(int $parentId): MediaInterface {
        $this->parentId = $parentId;
        return $this;
    }

    /**
     * @return int
     */
    public function getMediaId(): int {
        return $this->mediaId;
    }

    /**
     * @param int $mediaId
     * @return MediaInterface
     */
    public function setMediaId(int $mediaId): MediaInterface {
        $this->mediaId = $mediaId;
        return $this;
    }
}

