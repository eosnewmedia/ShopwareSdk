<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class LanguageSubShop implements LanguageSubShopInterface
{

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $id;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $mainId;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $categoryId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $name;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $title;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $position;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $host;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $basePath;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $baseUrl;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $hosts;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    private $secure;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    private $alwaysSecure;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $secureHost;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $secureBasePath;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $templateId;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    private $default;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    private $active;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    private $customerScope;

    /**
     * @var LocaleInterface
     * @Serializer\Type("Enm\ShopwareSdk\Model\Order\Locale")
     */
    private $locale;

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
        return (string)$this->mainId;
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
        return (int)$this->categoryId;
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
        return (string)$this->name;
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
        return (string)$this->title;
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
        return (int)$this->position;
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
        return (string)$this->host;
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
        return (string)$this->basePath;
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
        return (string)$this->baseUrl;
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
        return (string)$this->hosts;
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
        return (bool)$this->secure;
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
        return (bool)$this->alwaysSecure;
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
        return (string)$this->secureHost;
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
        return (string)$this->secureBasePath;
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
        return (int)$this->templateId;
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
        return (bool)$this->default;
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
        return (bool)$this->active;
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
        return (bool)$this->customerScope;
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

    /**
     * @return bool
     */
    public function hasLocale(): bool
    {
        return $this->locale instanceof LocaleInterface;
    }
}
