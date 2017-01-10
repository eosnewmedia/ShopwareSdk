<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Media;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 * @author Nicklas Reincke <reincke@eosnewmedia.de>
 */
class Media implements MediaInterface
{

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id")
     */
    private $id;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("albumId")
     */
    private $albumId;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("album")
     */
    private $album;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("file")
     */
    private $file;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    private $name;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("description")
     */
    private $description;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("path")
     */
    private $path;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("type")
     */
    private $type;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("extension")
     */
    private $extension;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("width")
     */
    private $width;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("height")
     */
    private $height;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("userId")
     */
    private $userId;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("created")
     */
    private $created;

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
     * @return MediaInterface
     */
    public function setId(int $id): MediaInterface
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getAlbumId(): int
    {
        return (int)$this->albumId;
    }

    /**
     * @param int $albumId
     *
     * @return MediaInterface
     */
    public function setAlbumId(int $albumId): MediaInterface
    {
        $this->albumId = $albumId;

        return $this;
    }

    /**
     * @return int
     */
    public function getAlbum(): int
    {
        return $this->album;
    }

    /**
     * @param int $album
     *
     * @return MediaInterface
     */
    public function setAlbum(int $album): MediaInterface
    {
        $this->album = $album;

        return $this;
    }

    /**
     * @return string
     */
    public function getFile(): string
    {
        return $this->file;
    }

    /**
     * @param string $file
     *
     * @return MediaInterface
     */
    public function setFile(string $file): MediaInterface
    {
        $this->file = $file;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return (string)$this->name;
    }

    /**
     * @param string $name
     *
     * @return MediaInterface
     */
    public function setName(string $name): MediaInterface
    {
        $this->name = $name;

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
     * @return MediaInterface
     */
    public function setDescription(string $description): MediaInterface
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
     * @return MediaInterface
     */
    public function setPath(string $path): MediaInterface
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return (string)$this->type;
    }

    /**
     * @param string $type
     *
     * @return MediaInterface
     */
    public function setType(string $type): MediaInterface
    {
        $this->type = $type;

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
     * @return MediaInterface
     */
    public function setExtension(string $extension): MediaInterface
    {
        $this->extension = $extension;

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
     * @return MediaInterface
     */
    public function setWidth(int $width): MediaInterface
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
     * @return MediaInterface
     */
    public function setHeight(int $height): MediaInterface
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return (int)$this->userId;
    }

    /**
     * @param int $userId
     *
     * @return MediaInterface
     */
    public function setUserId(int $userId): MediaInterface
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreated(): string
    {
        return (string)$this->created;
    }

    /**
     * @param string $created
     *
     * @return MediaInterface
     */
    public function setCreated(string $created): MediaInterface
    {
        $this->created = $created;

        return $this;
    }
}
