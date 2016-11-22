<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface LanguageSubShopInterface
{

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return LanguageSubShopInterface
     */
    public function setId(int $id) : LanguageSubShopInterface;

    /**
     * @return string
     */
    public function getMainId() : string;

    /**
     * @param string $mainId
     *
     * @return LanguageSubShopInterface
     */
    public function setMainId(string $mainId) : LanguageSubShopInterface;

    /**
     * @return int
     */
    public function getCategoryId() : int;

    /**
     * @param int $categoryId
     *
     * @return LanguageSubShopInterface
     */
    public function setCategoryId(int $categoryId) : LanguageSubShopInterface;

    /**
     * @return string
     */
    public function getName() : string;

    /**
     * @param string $name
     *
     * @return LanguageSubShopInterface
     */
    public function setName(string $name) : LanguageSubShopInterface;

    /**
     * @return string
     */
    public function getTitle() : string;

    /**
     * @param string $title
     *
     * @return LanguageSubShopInterface
     */
    public function setTitle(string $title) : LanguageSubShopInterface;

    /**
     * @return int
     */
    public function getPosition() : int;

    /**
     * @param int $position
     *
     * @return LanguageSubShopInterface
     */
    public function setPosition(int $position) : LanguageSubShopInterface;

    /**
     * @return string
     */
    public function getHost() : string;

    /**
     * @param string $host
     *
     * @return LanguageSubShopInterface
     */
    public function setHost(string $host) : LanguageSubShopInterface;

    /**
     * @return string
     */
    public function getBasePath() : string;

    /**
     * @param string $basePath
     *
     * @return LanguageSubShopInterface
     */
    public function setBasePath(string $basePath) : LanguageSubShopInterface;

    /**
     * @return string
     */
    public function getBaseUrl() : string;

    /**
     * @param string $baseUrl
     *
     * @return LanguageSubShopInterface
     */
    public function setBaseUrl(string $baseUrl) : LanguageSubShopInterface;

    /**
     * @return string
     */
    public function getHosts() : string;

    /**
     * @param string $hosts
     *
     * @return LanguageSubShopInterface
     */
    public function setHosts(string $hosts) : LanguageSubShopInterface;

    /**
     * @return boolean
     */
    public function isSecure() : bool;

    /**
     * @param boolean $secure
     *
     * @return LanguageSubShopInterface
     */
    public function setSecure(bool $secure) : LanguageSubShopInterface;

    /**
     * @return boolean
     */
    public function isAlwaysSecure() : bool;

    /**
     * @param boolean $alwaysSecure
     *
     * @return LanguageSubShopInterface
     */
    public function setAlwaysSecure(bool $alwaysSecure) : LanguageSubShopInterface;

    /**
     * @return string
     */
    public function getSecureHost() : string;

    /**
     * @param string $secureHost
     *
     * @return LanguageSubShopInterface
     */
    public function setSecureHost(string $secureHost) : LanguageSubShopInterface;

    /**
     * @return string
     */
    public function getSecureBasePath() : string;

    /**
     * @param string $secureBasePath
     *
     * @return LanguageSubShopInterface
     */
    public function setSecureBasePath(string $secureBasePath) : LanguageSubShopInterface;

    /**
     * @return int
     */
    public function getTemplateId() : int;

    /**
     * @param int $templateId
     *
     * @return LanguageSubShopInterface
     */
    public function setTemplateId(int $templateId) : LanguageSubShopInterface;

    /**
     * @return boolean
     */
    public function isDefault() : bool;

    /**
     * @param boolean $default
     *
     * @return LanguageSubShopInterface
     */
    public function setDefault(bool $default) : LanguageSubShopInterface;

    /**
     * @return boolean
     */
    public function isActive() : bool;

    /**
     * @param boolean $active
     *
     * @return LanguageSubShopInterface
     */
    public function setActive(bool $active) : LanguageSubShopInterface;

    /**
     * @return boolean
     */
    public function isCustomerScope() : bool;

    /**
     * @param boolean $customerScope
     *
     * @return LanguageSubShopInterface
     */
    public function setCustomerScope(bool $customerScope) : LanguageSubShopInterface;

    /**
     * @return LocaleInterface
     */
    public function getLocale() : LocaleInterface;

    /**
     * @param LocaleInterface $locale
     *
     * @return LanguageSubShopInterface
     */
    public function setLocale(LocaleInterface $locale) : LanguageSubShopInterface;
}
