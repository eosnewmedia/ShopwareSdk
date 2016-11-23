<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface LocaleInterface
{

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return LocaleInterface
     */
    public function setId($id) : LocaleInterface;

    /**
     * @return string
     */
    public function getLocale() : string;

    /**
     * @param string $locale
     *
     * @return LocaleInterface
     */
    public function setLocale(string $locale) : LocaleInterface;

    /**
     * @return string
     */
    public function getLanguage() : string;

    /**
     * @param string $language
     *
     * @return LocaleInterface
     */
    public function setLanguage(string $language) : LocaleInterface;

    /**
     * @return string
     */
    public function getTerritory() : string;

    /**
     * @param string $territory
     *
     * @return LocaleInterface
     */
    public function setTerritory(string $territory) : LocaleInterface;
}
