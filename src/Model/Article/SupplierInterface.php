<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

/**
 * @author Nicklas Reincke <reincke@eosnewmedia.de>
 */
interface SupplierInterface
{

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return SupplierInterface
     */
    public function setId(int $id) : SupplierInterface;

    /**
     * @return string
     */
    public function getName() : string;

    /**
     * @param string $name
     *
     * @return SupplierInterface
     */
    public function setName(string $name) : SupplierInterface;

    /**
     * @return string
     */
    public function getImage() : string;

    /**
     * @param string $image
     *
     * @return SupplierInterface
     */
    public function setImage(string $image) : SupplierInterface;

    /**
     * @return string
     */
    public function getLink() : string;

    /**
     * @param string $link
     *
     * @return SupplierInterface
     */
    public function setLink(string $link) : SupplierInterface;

    /**
     * @return string
     */
    public function getDescription() : string;

    /**
     * @param string $description
     *
     * @return SupplierInterface
     */
    public function setDescription(string $description) : SupplierInterface;

    /**
     * @return string
     */
    public function getMetaTitle() : string;

    /**
     * @param string $metaTitle
     *
     * @return SupplierInterface
     */
    public function setMetaTitle(string $metaTitle) : SupplierInterface;

    /**
     * @return string
     */
    public function getMetaDescription() : string;

    /**
     * @param string $metaDescription
     *
     * @return SupplierInterface
     */
    public function setMetaDescription(string $metaDescription) : SupplierInterface;

    /**
     * @return string
     */
    public function getMetaKeywords() : string;

    /**
     * @param string $metaKeywords
     *
     * @return SupplierInterface
     */
    public function setMetaKeywords(string $metaKeywords) : SupplierInterface;

    /**
     * @return string
     */
    public function getChanged() : string;

    /**
     * @param string $changed
     *
     * @return SupplierInterface
     */
    public function setChanged(string $changed) : SupplierInterface;
}