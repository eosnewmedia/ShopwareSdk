<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

use Enm\ShopwareSdk\Model\Manufacturer\ManufacturerInterface;
use JMS\Serializer\Annotation as Serializer;
use Enm\ShopwareSdk\Model\Category\CategoryInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 * @author Nicklas Reincke <reincke@eosnewmedia.de>
 */
class Article implements ArticleInterface
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
     * @Serializer\SerializedName("mainDetailId")
     */
    private $mainDetailId;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("supplierId")
     */
    private $supplierId;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("taxId")
     */
    private $taxId;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("priceGroupId")
     */
    private $priceGroupId;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("filterGroupId")
     */
    private $filterGroupId;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("configuratorSetId")
     */
    private $configuratorSetId;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    private $name;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("description")
     */
    private $description;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("descriptionLong")
     */
    private $descriptionLong;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("added")
     */
    private $added;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("active")
     */
    private $active;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("pseudoSales")
     */
    private $pseudoSales;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("highlight")
     */
    private $highlight;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("keywords")
     */
    private $keywords;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("metaTitle")
     */
    private $metaTitle;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("changed")
     */
    private $changed;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("priceGroupActive")
     */
    private $priceGroupActive;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("lastStock")
     */
    private $lastStock;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("crossBundleLook")
     */
    private $crossBundleLook;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("notification")
     */
    private $notification;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("template")
     */
    private $template;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("mode")
     */
    private $mode;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("availableFrom")
     */
    private $availableFrom;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("availableTo")
     */
    private $availableTo;

    /**
     * @var DetailInterface
     * @Serializer\Type("Enm\ShopwareSdk\Model\Article\Detail")
     * @Serializer\SerializedName("mainDetail")
     */
    private $mainDetail;

    /**
     * @var TaxInterface
     * @Serializer\Type("Enm\ShopwareSdk\Model\Article\Tax")
     * @Serializer\SerializedName("tax")
     */
    private $tax;

    /**
     * @var SupplierInterface
     * @Serializer\Type("Enm\ShopwareSdk\Model\Manufacturer\Manufacturer")
     * @Serializer\SerializedName("supplier")
     */
    private $supplier;

    /**
     * @var PropertyGroupInterface
     * @Serializer\Type("Enm\ShopwareSdk\Model\Article\PropertyGroup")
     * @Serializer\SerializedName("propertyGroup")
     */
    private $propertyGroup;

    /**
     * @var CustomerGroupInterface[]
     * @Serializer\Type("array<Enm\ShopwareSdk\Model\Article\CustomerGroup>")
     * @Serializer\SerializedName("customerGroups")
     */
    private $customerGroups = [];

    /**
     * @var ImageInterface[]
     * @Serializer\Type("array<Enm\ShopwareSdk\Model\Article\Image>")
     * @Serializer\SerializedName("images")
     */
    private $images = [];

    /**
     * @var ConfiguratorSetInterface
     * @Serializer\Type("Enm\ShopwareSdk\Model\Article\ConfiguratorSet")
     * @Serializer\SerializedName("configuratorSet")
     */
    private $configuratorSet;

    /**
     * @var LinkInterface[]
     * @Serializer\Type("array<Enm\ShopwareSdk\Model\Article\Link>")
     * @Serializer\SerializedName("links")
     */
    private $links = [];

    /**
     * @var DownloadInterface[]
     * @Serializer\Type("array<Enm\ShopwareSdk\Model\Article\Download>")
     * @Serializer\SerializedName("downloads")
     */
    private $downloads = [];

    /**
     * @var CategoryInterface[]
     * @Serializer\Type("array<Enm\ShopwareSdk\Model\Category\Category>")
     * @Serializer\SerializedName("categories")
     */
    private $categories = [];

    /**
     * @var SimilarInterface[]
     * @Serializer\Type("array<Enm\ShopwareSdk\Model\Article\Similar>")
     * @Serializer\SerializedName("similar")
     */
    private $similar = [];

    /**
     * @var RelatedInterface[]
     * @Serializer\Type("array<Enm\ShopwareSdk\Model\Article\Related>")
     * @Serializer\SerializedName("related")
     */
    private $related = [];

    /**
     * @var DetailInterface[]
     * @Serializer\Type("array<Enm\ShopwareSdk\Model\Article\Detail>")
     * @Serializer\SerializedName("details")
     */
    private $details = [];

    /**
     * @var PropertyValueInterface[]
     * @Serializer\Type("array<Enm\ShopwareSdk\Model\Article\PropertyValue>")
     * @Serializer\SerializedName("propertyValues")
     */
    private $propertyValues = [];

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
     * @return ArticleInterface
     */
    public function setId(int $id): ArticleInterface
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getMainDetailId(): int
    {
        return (int)$this->mainDetailId;
    }

    /**
     * @param int $mainDetailId
     *
     * @return ArticleInterface
     */
    public function setMainDetailId(int $mainDetailId): ArticleInterface
    {
        $this->mainDetailId = $mainDetailId;

        return $this;
    }

    /**
     * @return int
     */
    public function getSupplierId(): int
    {
        return (int)$this->supplierId;
    }

    /**
     * @param int $supplierId
     *
     * @return ArticleInterface
     */
    public function setSupplierId(int $supplierId): ArticleInterface
    {
        $this->supplierId = $supplierId;

        return $this;
    }

    /**
     * @return int
     */
    public function getTaxId(): int
    {
        return (int)$this->taxId;
    }

    /**
     * @param int $taxId
     *
     * @return ArticleInterface
     */
    public function setTaxId(int $taxId): ArticleInterface
    {
        $this->taxId = $taxId;

        return $this;
    }

    /**
     * @return int
     */
    public function getPriceGroupId(): int
    {
        return (int)$this->priceGroupId;
    }

    /**
     * @param int $priceGroupId
     *
     * @return ArticleInterface
     */
    public function setPriceGroupId(int $priceGroupId): ArticleInterface
    {
        $this->priceGroupId = $priceGroupId;

        return $this;
    }

    /**
     * @return int
     */
    public function getFilterGroupId(): int
    {
        return (int)$this->filterGroupId;
    }

    /**
     * @param int $filterGroupId
     *
     * @return ArticleInterface
     */
    public function setFilterGroupId(int $filterGroupId): ArticleInterface
    {
        $this->filterGroupId = $filterGroupId;

        return $this;
    }

    /**
     * @return int
     */
    public function getConfiguratorSetId(): int
    {
        return (int)$this->configuratorSetId;
    }

    /**
     * @param int $configuratorSetId
     *
     * @return ArticleInterface
     */
    public function setConfiguratorSetId(int $configuratorSetId): ArticleInterface
    {
        $this->configuratorSetId = $configuratorSetId;

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
     * @return ArticleInterface
     */
    public function setName(string $name): ArticleInterface
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return (string)$this->description;
    }

    /**
     * @param string $description
     *
     * @return ArticleInterface
     */
    public function setDescription(string $description): ArticleInterface
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescriptionLong(): string
    {
        return (string)$this->descriptionLong;
    }

    /**
     * @param string $descriptionLong
     *
     * @return ArticleInterface
     */
    public function setDescriptionLong(string $descriptionLong): ArticleInterface
    {
        $this->descriptionLong = $descriptionLong;

        return $this;
    }

    /**
     * @return string
     */
    public function getAdded(): string
    {
        return (string)$this->added;
    }

    /**
     * @param string $added
     *
     * @return ArticleInterface
     */
    public function setAdded(string $added): ArticleInterface
    {
        $this->added = $added;

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
     * @return ArticleInterface
     */
    public function setActive(bool $active): ArticleInterface
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return int
     */
    public function getPseudoSales(): int
    {
        return (int)$this->pseudoSales;
    }

    /**
     * @param int $pseudoSales
     *
     * @return ArticleInterface
     */
    public function setPseudoSales(int $pseudoSales): ArticleInterface
    {
        $this->pseudoSales = $pseudoSales;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isHighlight(): bool
    {
        return (bool)$this->highlight;
    }

    /**
     * @param boolean $highlight
     *
     * @return ArticleInterface
     */
    public function setHighlight(bool $highlight): ArticleInterface
    {
        $this->highlight = $highlight;

        return $this;
    }

    /**
     * @return string
     */
    public function getKeywords(): string
    {
        return (string)$this->keywords;
    }

    /**
     * @param string $keywords
     *
     * @return ArticleInterface
     */
    public function setKeywords(string $keywords): ArticleInterface
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * @return string
     */
    public function getMetaTitle(): string
    {
        return (string)$this->metaTitle;
    }

    /**
     * @param string $metaTitle
     *
     * @return ArticleInterface
     */
    public function setMetaTitle(string $metaTitle): ArticleInterface
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    /**
     * @return string
     */
    public function getChanged(): string
    {
        return (string)$this->changed;
    }

    /**
     * @param string $changed
     *
     * @return ArticleInterface
     */
    public function setChanged(string $changed): ArticleInterface
    {
        $this->changed = $changed;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isPriceGroupActive(): bool
    {
        return (bool)$this->priceGroupActive;
    }

    /**
     * @param boolean $priceGroupActive
     *
     * @return ArticleInterface
     */
    public function setPriceGroupActive(bool $priceGroupActive): ArticleInterface
    {
        $this->priceGroupActive = $priceGroupActive;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isLastStock(): bool
    {
        return (bool)$this->lastStock;
    }

    /**
     * @param boolean $lastStock
     *
     * @return ArticleInterface
     */
    public function setLastStock(bool $lastStock): ArticleInterface
    {
        $this->lastStock = $lastStock;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isCrossBundleLook(): bool
    {
        return (bool)$this->crossBundleLook;
    }

    /**
     * @param boolean $crossBundleLook
     *
     * @return ArticleInterface
     */
    public function setCrossBundleLook(bool $crossBundleLook): ArticleInterface
    {
        $this->crossBundleLook = $crossBundleLook;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isNotification(): bool
    {
        return (bool)$this->notification;
    }

    /**
     * @param boolean $notification
     *
     * @return ArticleInterface
     */
    public function setNotification(bool $notification): ArticleInterface
    {
        $this->notification = $notification;

        return $this;
    }

    /**
     * @return string
     */
    public function getTemplate(): string
    {
        return (string)$this->template;
    }

    /**
     * @param string $template
     *
     * @return ArticleInterface
     */
    public function setTemplate(string $template): ArticleInterface
    {
        $this->template = $template;

        return $this;
    }

    /**
     * @return int
     */
    public function getMode(): int
    {
        return (int)$this->mode;
    }

    /**
     * @param int $mode
     *
     * @return ArticleInterface
     */
    public function setMode(int $mode): ArticleInterface
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * @return string
     */
    public function getAvailableFrom(): string
    {
        return (string)$this->availableFrom;
    }

    /**
     * @param string $availableFrom
     *
     * @return ArticleInterface
     */
    public function setAvailableFrom(string $availableFrom): ArticleInterface
    {
        $this->availableFrom = $availableFrom;

        return $this;
    }

    /**
     * @return string
     */
    public function getAvailableTo(): string
    {
        return (string)$this->availableTo;
    }

    /**
     * @param string $availableTo
     *
     * @return ArticleInterface
     */
    public function setAvailableTo(string $availableTo): ArticleInterface
    {
        $this->availableTo = $availableTo;

        return $this;
    }

    /**
     * @return DetailInterface
     */
    public function getMainDetail(): DetailInterface
    {
        return $this->mainDetail;
    }

    /**
     * @return bool
     */
    public function hasMainDetail(): bool
    {
        return $this->mainDetail !== null;
    }

    /**
     * @param DetailInterface $mainDetail
     *
     * @return ArticleInterface
     */
    public function setMainDetail(DetailInterface $mainDetail): ArticleInterface
    {
        $this->mainDetail = $mainDetail;

        return $this;
    }

    /**
     * @return TaxInterface
     */
    public function getTax(): TaxInterface
    {
        return $this->tax;
    }

    /**
     * @return bool
     */
    public function hasTax(): bool
    {
        return $this->tax !== null;
    }

    /**
     * @param TaxInterface $tax
     *
     * @return ArticleInterface
     */
    public function setTax(TaxInterface $tax): ArticleInterface
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * @return ManufacturerInterface
     */
    public function getSupplier(): ManufacturerInterface
    {
        return $this->supplier;
    }

    /**
     * @return bool
     */
    public function hasSupplier(): bool
    {
        return $this->supplier !== null;
    }

    /**
     * @param ManufacturerInterface $supplier
     *
     * @return ArticleInterface
     */
    public function setSupplier(ManufacturerInterface $supplier): ArticleInterface
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * @return PropertyGroupInterface
     */
    public function getPropertyGroup(): PropertyGroupInterface
    {
        return $this->propertyGroup;
    }

    /**
     * @return bool
     */
    public function hasPropertyGroup(): bool
    {
        return $this->propertyGroup !== null;
    }

    /**
     * @param PropertyGroupInterface $propertyGroup
     *
     * @return ArticleInterface
     */
    public function setPropertyGroup(PropertyGroupInterface $propertyGroup): ArticleInterface
    {
        $this->propertyGroup = $propertyGroup;

        return $this;
    }

    /**
     * @return CustomerGroupInterface[]
     */
    public function getCustomerGroups(): array
    {
        return (array)$this->customerGroups;
    }

    /**
     * @param CustomerGroupInterface[] $customerGroups
     *
     * @return ArticleInterface
     */
    public function setCustomerGroups(array $customerGroups): ArticleInterface
    {
        $this->customerGroups = $customerGroups;

        return $this;
    }

    /**
     * @return ImageInterface[]
     */
    public function getImages(): array
    {
        return (array)$this->images;
    }

    /**
     * @param ImageInterface[] $images
     *
     * @return ArticleInterface
     */
    public function setImages(array $images): ArticleInterface
    {
        $this->images = $images;

        return $this;
    }

    /**
     * @return ConfiguratorSetInterface
     */
    public function getConfiguratorSet(): ConfiguratorSetInterface
    {
        return $this->configuratorSet;
    }

    /**
     * @return bool
     */
    public function hasConfiguratorSet(): bool
    {
        return $this->configuratorSet !== null;
    }

    /**
     * @param ConfiguratorSetInterface $configuratorSet
     *
     * @return ArticleInterface
     */
    public function setConfiguratorSet(ConfiguratorSetInterface $configuratorSet): ArticleInterface
    {
        $this->configuratorSet = $configuratorSet;

        return $this;
    }

    /**
     * @return LinkInterface[]
     */
    public function getLinks(): array
    {
        return (array)$this->links;
    }

    /**
     * @param LinkInterface[] $links
     *
     * @return ArticleInterface
     */
    public function setLinks(array $links): ArticleInterface
    {
        $this->links = $links;

        return $this;
    }

    /**
     * @return DownloadInterface[]
     */
    public function getDownloads(): array
    {
        return (array)$this->downloads;
    }

    /**
     * @param DownloadInterface[] $downloads
     *
     * @return ArticleInterface
     */
    public function setDownloads(array $downloads): ArticleInterface
    {
        $this->downloads = $downloads;

        return $this;
    }

    /**
     * @return CategoryInterface[]
     */
    public function getCategories(): array
    {
        return (array)$this->categories;
    }

    /**
     * @param CategoryInterface[] $categories
     *
     * @return ArticleInterface
     */
    public function setCategories(array $categories): ArticleInterface
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * @return SimilarInterface[]
     */
    public function getSimilar(): array
    {
        return (array)$this->similar;
    }

    /**
     * @param SimilarInterface[] $similar
     *
     * @return ArticleInterface
     */
    public function setSimilar(array $similar): ArticleInterface
    {
        $this->similar = $similar;

        return $this;
    }

    /**
     * @return RelatedInterface[]
     */
    public function getRelated(): array
    {
        return (array)$this->related;
    }

    /**
     * @param RelatedInterface[] $related
     *
     * @return ArticleInterface
     */
    public function setRelated(array $related): ArticleInterface
    {
        $this->related = $related;

        return $this;
    }

    /**
     * @return DetailInterface[]
     */
    public function getDetails(): array
    {
        return (array)$this->details;
    }

    /**
     * @param DetailInterface[] $details
     *
     * @return ArticleInterface
     */
    public function setDetails(array $details): ArticleInterface
    {
        $this->details = $details;

        return $this;
    }

    /**
     * @return PropertyValueInterface[]
     */
    public function getPropertyValues(): array
    {
        return $this->propertyValues;
    }

    /**
     * @param PropertyValueInterface[] $propertyValues
     *
     * @return ArticleInterface
     */
    public function setPropertyValues(array $propertyValues): ArticleInterface
    {
        $this->propertyValues = $propertyValues;

        return $this;
    }
}
