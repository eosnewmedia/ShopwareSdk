<?php
namespace Enm\ShopwareSdk\Model;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface ShopInterface
{

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return ShopInterface
     */
    public function setId(int $id) : ShopInterface;

    /**
     * @return string
     */
    public function getMainId() : string;

    /**
     * @param string $mainId
     *
     * @return ShopInterface
     */
    public function setMainId(string $mainId) : ShopInterface;

    /**
     * @return int
     */
    public function getCategoryId() : int;

    /**
     * @param int $categoryId
     *
     * @return ShopInterface
     */
    public function setCategoryId(int $categoryId) : ShopInterface;

    /**
     * @return string
     */
    public function getName() : string;

    /**
     * @param string $name
     *
     * @return ShopInterface
     */
    public function setName(string $name) : ShopInterface;

    /**
     * @return string
     */
    public function getTitle() : string;

    /**
     * @param string $title
     *
     * @return ShopInterface
     */
    public function setTitle(string $title) : ShopInterface;

    /**
     * @return int
     */
    public function getPosition() : int;

    /**
     * @param int $position
     *
     * @return ShopInterface
     */
    public function setPosition(int $position) : ShopInterface;

    /**
     * @return string
     */
    public function getHost() : string;

    /**
     * @param string $host
     *
     * @return ShopInterface
     */
    public function setHost(string $host) : ShopInterface;

    /**
     * @return string
     */
    public function getBasePath() : string;

    /**
     * @param string $basePath
     *
     * @return ShopInterface
     */
    public function setBasePath(string $basePath) : ShopInterface;

    /**
     * @return string
     */
    public function getBaseUrl() : string;

    /**
     * @param string $baseUrl
     *
     * @return ShopInterface
     */
    public function setBaseUrl(string $baseUrl) : ShopInterface;

    /**
     * @return string
     */
    public function getHosts() : string;

    /**
     * @param string $hosts
     *
     * @return ShopInterface
     */
    public function setHosts(string $hosts) : ShopInterface;

    /**
     * @return boolean
     */
    public function isSecure() : bool;

    /**
     * @param boolean $secure
     *
     * @return ShopInterface
     */
    public function setSecure(bool $secure) : ShopInterface;

    /**
     * @return boolean
     */
    public function isAlwaysSecure() : bool;

    /**
     * @param boolean $alwaysSecure
     *
     * @return ShopInterface
     */
    public function setAlwaysSecure(bool $alwaysSecure) : ShopInterface;

    /**
     * @return string
     */
    public function getSecureHost() : string;

    /**
     * @param string $secureHost
     *
     * @return ShopInterface
     */
    public function setSecureHost(string $secureHost) : ShopInterface;

    /**
     * @return string
     */
    public function getSecureBasePath() : string;

    /**
     * @param string $secureBasePath
     *
     * @return ShopInterface
     */
    public function setSecureBasePath(string $secureBasePath) : ShopInterface;

    /**
     * @return int
     */
    public function getTemplateId() : int;

    /**
     * @param int $templateId
     *
     * @return ShopInterface
     */
    public function setTemplateId(int $templateId) : ShopInterface;

    /**
     * @return boolean
     */
    public function isDefault() : bool;

    /**
     * @param boolean $default
     *
     * @return ShopInterface
     */
    public function setDefault(bool $default) : ShopInterface;

    /**
     * @return boolean
     */
    public function isActive() : bool;

    /**
     * @param boolean $active
     *
     * @return ShopInterface
     */
    public function setActive(bool $active) : ShopInterface;

    /**
     * @return boolean
     */
    public function isCustomerScope() : bool;

    /**
     * @param boolean $customerScope
     *
     * @return ShopInterface
     */
    public function setCustomerScope(bool $customerScope) : ShopInterface;
}
