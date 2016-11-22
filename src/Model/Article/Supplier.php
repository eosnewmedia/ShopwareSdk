<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

/**
 * @author Nicklas Reincke <reincke@eosnewmedia.de>
 */
class Supplier implements SupplierInterface
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $link;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $metaTitle;

    /**
     * @var string
     */
    private $metaDescription;

    /**
     * @var string
     */
    private $metaKeywords;

    /**
     * Date and time formatted in ISO8601 format.
     *
     * @var string
     */
    private $changed;

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
     * @return SupplierInterface
     */
    public function setId(int $id): SupplierInterface
    {
        $this->id = $id;

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
     * @return SupplierInterface
     */
    public function setName(string $name): SupplierInterface
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     *
     * @return SupplierInterface
     */
    public function setImage(string $image): SupplierInterface
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * @param string $link
     *
     * @return SupplierInterface
     */
    public function setLink(string $link): SupplierInterface
    {
        $this->link = $link;

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
     * @return SupplierInterface
     */
    public function setDescription(string $description): SupplierInterface
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getMetaTitle(): string
    {
        return $this->metaTitle;
    }

    /**
     * @param string $metaTitle
     *
     * @return SupplierInterface
     */
    public function setMetaTitle(string $metaTitle): SupplierInterface
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    /**
     * @return string
     */
    public function getMetaDescription(): string
    {
        return $this->metaDescription;
    }

    /**
     * @param string $metaDescription
     *
     * @return SupplierInterface
     */
    public function setMetaDescription(string $metaDescription): SupplierInterface
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getMetaKeywords(): string
    {
        return $this->metaKeywords;
    }

    /**
     * @param string $metaKeywords
     *
     * @return SupplierInterface
     */
    public function setMetaKeywords(string $metaKeywords): SupplierInterface
    {
        $this->metaKeywords = $metaKeywords;

        return $this;
    }

    /**
     * @return string
     */
    public function getChanged(): string
    {
        return $this->changed;
    }

    /**
     * @param string $changed
     *
     * @return SupplierInterface
     */
    public function setChanged(string $changed): SupplierInterface
    {
        $this->changed = $changed;

        return $this;
    }
}
