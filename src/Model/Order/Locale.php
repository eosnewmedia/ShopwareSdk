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
     * @var
     */
    private $id;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $locale;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $language;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $territory;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return LocaleInterface
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocale(): string
    {
        return $this->locale;
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
        return $this->language;
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
        return $this->territory;
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
