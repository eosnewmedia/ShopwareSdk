<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 * @author Nicklas Reincke <reincke@eosnewmedia.de>
 */
class Article implements ArticleInterface
{

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $id;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $mainDetailId;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $supplierId;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $taxId;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $priceGroupId;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $filterGroupId;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $configuratorSetId;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $name;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $description;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $descriptionLong;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $added;

    /**
     * @var bool
     * @SerializerType("boolean")
     */
    private $active;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $pseudoSales;

    /**
     * @var bool
     * @SerializerType("boolean")
     */
    private $highlight;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $keywords;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $metaTitle;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $changed;

    /**
     * @var bool
     * @SerializerType("boolean")
     */
    private $priceGroupActive;

    /**
     * @var bool
     * @SerializerType("boolean")
     */
    private $lastStock;

    /**
     * @var bool
     * @SerializerType("boolean")
     */
    private $crossBundleLook;

    /**
     * @var bool
     * @SerializerType("boolean")
     */
    private $notification;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $template;

    /**
     * @var int
     * @SerializerType("integer")
     */
    private $mode;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $availableFrom;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $availableTo;

    /**
     * @var DetailInterface
     * @Serializer\Type("Enm\ShopwareSdk\Model\Article\Detail")
     */
    private $mainDetail;

    /**
     * @var TaxInterface
     * @Serializer\Type("Enm\ShopwareSdk\Model\Article\Tax")
     */
    private $tax;

    /**
     * @var SupplierInterface
     * @Serializer\Type("Enm\ShopwareSdk\Model\Article\Detail")
     */
    private $supplier;

    /**
     * @var PropertyGroupInterface
     */
    private $propertyGroup;

    /**
     * @var CustomerGroupInterface[]
     */
    private $customerGroups;

    /**
     * @var ImageInterface[]
     */
    private $images;

    /**
     * @var ConfiguratorSetInterface
     */
    private $configuratorSet;

    /**
     * @var LinkInterface[]
     */
    private $links;

    /**
     * @var DownloadInterface[]
     */
    private $downloads;

    /**
     * @var CategoryInterface[]
     */
    private $categories;

    /**
     * @var SimilarInterface[]
     */
    private $similar;

    /**
     * @var RelatedInterface[]
     */
    private $related;

    /**
     * @var DetailInterface[]
     */
    private $details;

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
        return $this->mainDetailId;
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
        return $this->supplierId;
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
        return $this->taxId;
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
        return $this->priceGroupId;
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
        return $this->filterGroupId;
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
        return $this->configuratorSetId;
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
        return $this->name;
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
        return $this->description;
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
        return $this->descriptionLong;
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
        return $this->added;
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
        return $this->active;
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
        return $this->pseudoSales;
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
        return $this->highlight;
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
        return $this->keywords;
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
        return $this->metaTitle;
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
        return $this->changed;
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
        return $this->priceGroupActive;
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
        return $this->lastStock;
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
        return $this->crossBundleLook;
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
        return $this->notification;
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
        return $this->template;
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
        return $this->mode;
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
        return $this->availableFrom;
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
        return $this->availableTo;
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
     * @return SupplierInterface
     */
    public function getSupplier(): SupplierInterface
    {
        return $this->supplier;
    }

    /**
     * @param SupplierInterface $supplier
     *
     * @return ArticleInterface
     */
    public function setSupplier(SupplierInterface $supplier): ArticleInterface
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
        return $this->customerGroups;
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
        return $this->images;
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
        return $this->links;
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
        return $this->downloads;
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
        return $this->categories;
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
        return $this->similar;
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
        return $this->related;
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
        return $this->details;
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
}
