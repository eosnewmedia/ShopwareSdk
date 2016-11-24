<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Nicklas Reincke <reincke@eosnewmedia.de>
 */
class Supplier implements SupplierInterface
{
    
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
     * Date and time formatted in ISO8601 format.
     *
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("changed")
     */
    private $changed;
    
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
        return (string)$this->name;
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
        return (string)$this->image;
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
        return (string)$this->link;
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
        return (string)$this->description;
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
        return (string)$this->metaTitle;
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
        return (string)$this->metaDescription;
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
        return (string)$this->metaKeywords;
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
        return (string)$this->changed;
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
