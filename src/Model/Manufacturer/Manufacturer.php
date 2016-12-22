<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Manufacturer;

use JMS\Serializer\Annotation as Serializer;


/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Manufacturer implements ManufacturerInterface {
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id")
     */
    private $id;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    private $name;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("image")
     */
    private $image;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("link")
     */
    private $link;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("description")
     */
    private $description;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("metaTitle")
     */
    private $metaTitle;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("metaDescription")
     */
    private $metaDescription;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("metaKeywords")
     */
    private $metaKeywords;

    /**
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ManufacturerInterface
     */
    public function setId(int $id): ManufacturerInterface {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ManufacturerInterface
     */
    public function setName(string $name): ManufacturerInterface {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getImage(): string {
        return $this->image;
    }

    /**
     * @param string $image
     * @return ManufacturerInterface
     */
    public function setImage(string $image): ManufacturerInterface {
        $this->image = $image;
        return $this;
    }

    /**
     * @return string
     */
    public function getLink(): string {
        return $this->link;
    }

    /**
     * @param string $link
     * @return ManufacturerInterface
     */
    public function setLink(string $link): ManufacturerInterface {
        $this->link = $link;
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
     * @return ManufacturerInterface
     */
    public function setDescription(string $description): ManufacturerInterface {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getMetaTitle(): string {
        return $this->metaTitle;
    }

    /**
     * @param string $metaTitle
     * @return ManufacturerInterface
     */
    public function setMetaTitle(string $metaTitle): ManufacturerInterface {
        $this->metaTitle = $metaTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getMetaDescription(): string {
        return $this->metaDescription;
    }

    /**
     * @param string $metaDescription
     * @return ManufacturerInterface
     */
    public function setMetaDescription(string $metaDescription): ManufacturerInterface {
        $this->metaDescription = $metaDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getMetaKeywords(): string {
        return $this->metaKeywords;
    }

    /**
     * @param string $metaKeywords
     * @return ManufacturerInterface
     */
    public function setMetaKeywords(string $metaKeywords): ManufacturerInterface {
        $this->metaKeywords = $metaKeywords;
        return $this;
    }
}
