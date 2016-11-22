<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Download implements DownloadInterface
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
    private $name;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $file;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $size;

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
     * @return DownloadInterface
     */
    public function setId(int $id): DownloadInterface
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
     * @return DownloadInterface
     */
    public function setArticleId(int $articleId): DownloadInterface
    {
        $this->articleId = $articleId;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return DownloadInterface
     */
    public function setName(string $name): DownloadInterface
    {
        $this->name = $name;

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
     * @return DownloadInterface
     */
    public function setFile(string $file): DownloadInterface
    {
        $this->file = $file;

        return $this;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     *
     * @return DownloadInterface
     */
    public function setSize(int $size): DownloadInterface
    {
        $this->size = $size;

        return $this;
    }
}