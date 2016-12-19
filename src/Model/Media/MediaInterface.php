<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Media;

use Enm\ShopwareSdk\Model\RootModelInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface MediaInterface extends RootModelInterface {
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @param int $id
     * @return MediaInterface
     */
    public function setId(int $id): MediaInterface;

    /**
     * @return int
     */
    public function getArticleId(): int;

    /**
     * @param int $articleId
     * @return MediaInterface
     */
    public function setArticleId(int $articleId): MediaInterface;

    /**
     * @return int
     */
    public function getArticleDetailId(): int;

    /**
     * @param int $articleDetailId
     * @return MediaInterface
     */
    public function setArticleDetailId(int $articleDetailId): MediaInterface;

    /**
     * @return string
     */
    public function getDescription(): string;

    /**
     * @param string $description
     * @return MediaInterface
     */
    public function setDescription(string $description): MediaInterface;

    /**
     * @return string
     */
    public function getPath(): string;

    /**
     * @param string $path
     * @return MediaInterface
     */
    public function setPath(string $path): MediaInterface;

    /**
     * @return int
     */
    public function getMain(): int;

    /**
     * @param int $main
     * @return MediaInterface
     */
    public function setMain(int $main): MediaInterface;

    /**
     * @return int
     */
    public function getPosition(): int;

    /**
     * @param int $position
     * @return MediaInterface
     */
    public function setPosition(int $position): MediaInterface;

    /**
     * @return int
     */
    public function getWidth(): int;

    /**
     * @param int $width
     * @return MediaInterface
     */
    public function setWidth(int $width): MediaInterface;

    /**
     * @return int
     */
    public function getHeight(): int;

    /**
     * @param int $height
     * @return MediaInterface
     */
    public function setHeight(int $height): MediaInterface;

    /**
     * @return string
     */
    public function getRelations(): string;

    /**
     * @param string $relations
     * @return MediaInterface
     */
    public function setRelations(string $relations): MediaInterface;

    /**
     * @return string
     */
    public function getExtension(): string;

    /**
     * @param string $extension
     * @return MediaInterface
     */
    public function setExtension(string $extension): MediaInterface;

    /**
     * @return int
     */
    public function getParentId(): int;

    /**
     * @param int $parentId
     * @return MediaInterface
     */
    public function setParentId(int $parentId): MediaInterface;

    /**
     * @return int
     */
    public function getMediaId(): int;

    /**
     * @param int $mediaId
     * @return MediaInterface
     */
    public function setMediaId(int $mediaId): MediaInterface;
}
