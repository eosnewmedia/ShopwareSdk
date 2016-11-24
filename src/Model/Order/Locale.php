<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Locale implements LocaleInterface
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
     * @Serializer\SerializedName("locale")
     */
    private $locale;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("language")
     */
    private $language;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("territory")
     */
    private $territory;
    
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
     * @return LocaleInterface
     */
    public function setId($id) : LocaleInterface
    {
        $this->id = $id;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getLocale(): string
    {
        return (string)$this->locale;
    }
    
    /**
     * @param string $locale
     *
     * @return LocaleInterface
     */
    public function setLocale(string $locale): LocaleInterface
    {
        $this->locale = $locale;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return (string)$this->language;
    }
    
    /**
     * @param string $language
     *
     * @return LocaleInterface
     */
    public function setLanguage(string $language): LocaleInterface
    {
        $this->language = $language;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getTerritory(): string
    {
        return (string)$this->territory;
    }
    
    /**
     * @param string $territory
     *
     * @return LocaleInterface
     */
    public function setTerritory(string $territory): LocaleInterface
    {
        $this->territory = $territory;
        
        return $this;
    }
}
