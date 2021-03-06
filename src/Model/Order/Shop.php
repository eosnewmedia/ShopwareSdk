<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Shop implements ShopInterface
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
     * @Serializer\SerializedName("mainId")
     */
    private $mainId;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("categoryId")
     */
    private $categoryId;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    private $name;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("title")
     */
    private $title;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("position")
     */
    private $position;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("host")
     */
    private $host;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("basePath")
     */
    private $basePath;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("baseUrl")
     */
    private $baseUrl;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("hosts")
     */
    private $hosts;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("secure")
     */
    private $secure;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("alwaysSecure")
     */
    private $alwaysSecure;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("secureHost")
     */
    private $secureHost;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("secureBasePath")
     */
    private $secureBasePath;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("templateId")
     */
    private $templateId;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("default")
     */
    private $default;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("active")
     */
    private $active;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("customerScope")
     */
    private $customerScope;

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
        return (string)$this->mainId;
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
        return (int)$this->categoryId;
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
        return (string)$this->name;
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
        return (string)$this->title;
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
        return (int)$this->position;
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
        return (string)$this->host;
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
        return (string)$this->basePath;
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
        return (string)$this->baseUrl;
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
        return (string)$this->hosts;
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
        return (bool)$this->secure;
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
        return (bool)$this->alwaysSecure;
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
        return (string)$this->secureHost;
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
        return (string)$this->secureBasePath;
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
        return (int)$this->templateId;
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
        return (bool)$this->default;
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
        return (bool)$this->active;
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
        return (bool)$this->customerScope;
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
