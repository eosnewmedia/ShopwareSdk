<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface DownloadInterface
{

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return DownloadInterface
     */
    public function setId(int $id) : DownloadInterface;

    /**
     * @return int
     */
    public function getArticleId() : int;

    /**
     * @param int $articleId
     *
     * @return DownloadInterface
     */
    public function setArticleId(int $articleId) : DownloadInterface;

    /**
     * @return string
     */
    public function getName() : string;

    /**
     * @param string $name
     *
     * @return DownloadInterface
     */
    public function setName(string $name) : DownloadInterface;

    /**
     * @return string
     */
    public function getFile() : string;

    /**
     * @param string $file
     *
     * @return DownloadInterface
     */
    public function setFile(string $file) : DownloadInterface;

    /**
     * @return int
     */
    public function getSize() : int;

    /**
     * @param int $size
     *
     * @return DownloadInterface
     */
    public function setSize(int $size) : DownloadInterface;
}
