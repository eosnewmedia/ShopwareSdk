<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class LanguageSubShop implements LanguageSubShopInterface
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $mainId;

    /**
     * @var int
     */
    private $categoryId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $title;

    /**
     * @var int
     */
    private $position;

    /**
     * @var string
     */
    private $host;

    /**
     * @var string
     */
    private $basePath;

    /**
     * @var string
     */
    private $baseUrl;

    /**
     * @var string
     */
    private $hosts;

    /**
     * @var bool
     */
    private $secure;

    /**
     * @var bool
     */
    private $alwaysSecure;

    /**
     * @var string
     */
    private $secureHost;

    /**
     * @var string
     */
    private $secureBasePath;

    /**
     * @var int
     */
    private $templateId;

    /**
     * @var bool
     */
    private $default;

    /**
     * @var bool
     */
    private $active;

    /**
     * @var bool
     */
    private $customerScope;

    /**
     * @var LocaleInterface
     */
    private $locale;

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
     * @return LanguageSubShopInterface
     */
    public function setId(int $id): LanguageSubShopInterface
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getMainId(): string
    {
        return $this->mainId;
    }

    /**
     * @param string $mainId
     *
     * @return LanguageSubShopInterface
     */
    public function setMainId(string $mainId): LanguageSubShopInterface
    {
        $this->mainId = $mainId;

        return $this;
    }

    /**
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     *
     * @return LanguageSubShopInterface
     */
    public function setCategoryId(int $categoryId): LanguageSubShopInterface
    {
        $this->categoryId = $categoryId;

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
     * @return LanguageSubShopInterface
     */
    public function setName(string $name): LanguageSubShopInterface
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return LanguageSubShopInterface
     */
    public function setTitle(string $title): LanguageSubShopInterface
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @param int $position
     *
     * @return LanguageSubShopInterface
     */
    public function setPosition(int $position): LanguageSubShopInterface
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @param string $host
     *
     * @return LanguageSubShopInterface
     */
    public function setHost(string $host): LanguageSubShopInterface
    {
        $this->host = $host;

        return $this;
    }

    /**
     * @return string
     */
    public function getBasePath(): string
    {
        return $this->basePath;
    }

    /**
     * @param string $basePath
     *
     * @return LanguageSubShopInterface
     */
    public function setBasePath(string $basePath): LanguageSubShopInterface
    {
        $this->basePath = $basePath;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    /**
     * @param string $baseUrl
     *
     * @return LanguageSubShopInterface
     */
    public function setBaseUrl(string $baseUrl): LanguageSubShopInterface
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getHosts(): string
    {
        return $this->hosts;
    }

    /**
     * @param string $hosts
     *
     * @return LanguageSubShopInterface
     */
    public function setHosts(string $hosts): LanguageSubShopInterface
    {
        $this->hosts = $hosts;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isSecure(): bool
    {
        return $this->secure;
    }

    /**
     * @param boolean $secure
     *
     * @return LanguageSubShopInterface
     */
    public function setSecure(bool $secure): LanguageSubShopInterface
    {
        $this->secure = $secure;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isAlwaysSecure(): bool
    {
        return $this->alwaysSecure;
    }

    /**
     * @param boolean $alwaysSecure
     *
     * @return LanguageSubShopInterface
     */
    public function setAlwaysSecure(bool $alwaysSecure): LanguageSubShopInterface
    {
        $this->alwaysSecure = $alwaysSecure;

        return $this;
    }

    /**
     * @return string
     */
    public function getSecureHost(): string
    {
        return $this->secureHost;
    }

    /**
     * @param string $secureHost
     *
     * @return LanguageSubShopInterface
     */
    public function setSecureHost(string $secureHost): LanguageSubShopInterface
    {
        $this->secureHost = $secureHost;

        return $this;
    }

    /**
     * @return string
     */
    public function getSecureBasePath(): string
    {
        return $this->secureBasePath;
    }

    /**
     * @param string $secureBasePath
     *
     * @return LanguageSubShopInterface
     */
    public function setSecureBasePath(string $secureBasePath): LanguageSubShopInterface
    {
        $this->secureBasePath = $secureBasePath;

        return $this;
    }

    /**
     * @return int
     */
    public function getTemplateId(): int
    {
        return $this->templateId;
    }

    /**
     * @param int $templateId
     *
     * @return LanguageSubShopInterface
     */
    public function setTemplateId(int $templateId): LanguageSubShopInterface
    {
        $this->templateId = $templateId;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isDefault(): bool
    {
        return $this->default;
    }

    /**
     * @param boolean $default
     *
     * @return LanguageSubShopInterface
     */
    public function setDefault(bool $default): LanguageSubShopInterface
    {
        $this->default = $default;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     *
     * @return LanguageSubShopInterface
     */
    public function setActive(bool $active): LanguageSubShopInterface
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isCustomerScope(): bool
    {
        return $this->customerScope;
    }

    /**
     * @param boolean $customerScope
     *
     * @return LanguageSubShopInterface
     */
    public function setCustomerScope(bool $customerScope): LanguageSubShopInterface
    {
        $this->customerScope = $customerScope;

        return $this;
    }

    /**
     * @return LocaleInterface
     */
    public function getLocale(): LocaleInterface
    {
        return $this->locale;
    }

    /**
     * @param LocaleInterface $locale
     *
     * @return LanguageSubShopInterface
     */
    public function setLocale(LocaleInterface $locale): LanguageSubShopInterface
    {
        $this->locale = $locale;

        return $this;
    }
}
