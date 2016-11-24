<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Link implements LinkInterface
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
     * @Serializer\SerializedName("articleId")
     */
    private $articleId;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    private $name;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("link")
     */
    private $link;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("target")
     */
    private $target;
    
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
     * @return LinkInterface
     */
    public function setId(int $id): LinkInterface
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
     * @return LinkInterface
     */
    public function setArticleId(int $articleId): LinkInterface
    {
        $this->articleId = $articleId;
        
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
     * @return LinkInterface
     */
    public function setName(string $name): LinkInterface
    {
        $this->name = $name;
        
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
     * @return LinkInterface
     */
    public function setLink(string $link): LinkInterface
    {
        $this->link = $link;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getTarget(): string
    {
        return (string)$this->target;
    }
    
    /**
     * @param string $target
     *
     * @return LinkInterface
     */
    public function setTarget(string $target): LinkInterface
    {
        $this->target = $target;
        
        return $this;
    }
}
