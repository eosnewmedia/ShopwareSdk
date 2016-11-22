<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Shop implements ShopInterface
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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return ShopInterface
     */
    public function setId(int $id): ShopInterface
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
     * @return ShopInterface
     */
    public function setMainId(string $mainId): ShopInterface
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
     * @return ShopInterface
     */
    public function setCategoryId(int $categoryId): ShopInterface
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
     * @return ShopInterface
     */
    public function setName(string $name): ShopInterface
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
     * @return ShopInterface
     */
    public function setTitle(string $title): ShopInterface
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
     * @return ShopInterface
     */
    public function setPosition(int $position): ShopInterface
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
     * @return ShopInterface
     */
    public function setHost(string $host): ShopInterface
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
     * @return ShopInterface
     */
    public function setBasePath(string $basePath): ShopInterface
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
     * @return ShopInterface
     */
    public function setBaseUrl(string $baseUrl): ShopInterface
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
     * @return ShopInterface
     */
    public function setHosts(string $hosts): ShopInterface
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
     * @return ShopInterface
     */
    public function setSecure(bool $secure): ShopInterface
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
     * @return ShopInterface
     */
    public function setAlwaysSecure(bool $alwaysSecure): ShopInterface
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
     * @return ShopInterface
     */
    public function setSecureHost(string $secureHost): ShopInterface
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
     * @return ShopInterface
     */
    public function setSecureBasePath(string $secureBasePath): ShopInterface
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
     * @return ShopInterface
     */
    public function setTemplateId(int $templateId): ShopInterface
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
     * @return ShopInterface
     */
    public function setDefault(bool $default): ShopInterface
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
     * @return ShopInterface
     */
    public function setActive(bool $active): ShopInterface
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
     * @return ShopInterface
     */
    public function setCustomerScope(bool $customerScope): ShopInterface
    {
        $this->customerScope = $customerScope;

        return $this;
    }
}
