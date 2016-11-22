<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 * @author Nicklas Reincke <reincke@eosnewmedia.de>
 */
class Article implements ArticleInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $mainDetailId;

    /**
     * @var int
     */
    private $supplierId;

    /**
     * @var int
     */
    private $taxId;

    /**
     * @var int
     */
    private $priceGroupId;

    /**
     * @var int
     */
    private $filterGroupId;

    /**
     * @var int
     */
    private $configuratorSetId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $descriptionLong;

    /**
     * @var string
     */
    private $added;

    /**
     * @var bool
     */
    private $active;

    /**
     * @var int
     */
    private $pseudoSales;

    /**
     * @var bool
     */
    private $highlight;

    /**
     * @var string
     */
    private $keywords;

    /**
     * @var string
     */
    private $metaTitle;

    /**
     * @var string
     */
    private $changed;

    /**
     * @var bool
     */
    private $priceGroupActive;

    /**
     * @var bool
     */
    private $lastStock;

    /**
     * @var bool
     */
    private $crossBundleLook;

    /**
     * @var bool
     */
    private $notification;

    /**
     * @var string
     */
    private $template;

    /**
     * @var int
     */
    private $mode;

    /**
     * @var string
     */
    private $availableFrom;

    /**
     * @var string
     */
    private $availableTo;

    /**
     * @var ArticleDetailInterface
     */
    private $mainDetail;

    /**
     * @var TaxInterface
     */
    private $tax;

    /**
     * @var PropertyValueInterface[]
     */
    private $propertyValues;

    /**
     * @var ArticleSupplierInterface
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
     * @var ArticleImageInterface[]
     */
    private $images;

    /**
     * @var ArticleConfiguratorSetInterface
     */
    private $configuratorSet;

    /**
     * @var ArticleLinkInterface[]
     */
    private $links;

    /**
     * @var ArticleDownloadInterface[]
     */
    private $downloads;

    /**
     * @var ArticleCategoryInterface[]
     */
    private $categories;

    /**
     * @var ArticleSimilarInterface[]
     */
    private $similar;

    /**
     * @var ArticleRelatedInterface[]
     */
    private $related;

    /**
     * @var ArticleDetailInterface[]
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
     * @return ArticleDetailInterface
     */
    public function getMainDetail(): ArticleDetailInterface
    {
        return $this->mainDetail;
    }

    /**
     * @param ArticleDetailInterface $mainDetail
     *
     * @return ArticleInterface
     */
    public function setMainDetail(ArticleDetailInterface $mainDetail): ArticleInterface
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

    /**
     * @return ArticleSupplierInterface
     */
    public function getSupplier(): ArticleSupplierInterface
    {
        return $this->supplier;
    }

    /**
     * @param ArticleSupplierInterface $supplier
     *
     * @return ArticleInterface
     */
    public function setSupplier(ArticleSupplierInterface $supplier): ArticleInterface
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
     * @return ArticleImageInterface[]
     */
    public function getImages(): array
    {
        return $this->images;
    }

    /**
     * @param ArticleImageInterface[] $images
     *
     * @return ArticleInterface
     */
    public function setImages(array $images): ArticleInterface
    {
        $this->images = $images;

        return $this;
    }

    /**
     * @return ArticleConfiguratorSetInterface
     */
    public function getConfiguratorSet(): ArticleConfiguratorSetInterface
    {
        return $this->configuratorSet;
    }

    /**
     * @param ArticleConfiguratorSetInterface $configuratorSet
     *
     * @return ArticleInterface
     */
    public function setConfiguratorSet(ArticleConfiguratorSetInterface $configuratorSet): ArticleInterface
    {
        $this->configuratorSet = $configuratorSet;

        return $this;
    }

    /**
     * @return ArticleLinkInterface[]
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    /**
     * @param ArticleLinkInterface[] $links
     *
     * @return ArticleInterface
     */
    public function setLinks(array $links): ArticleInterface
    {
        $this->links = $links;

        return $this;
    }

    /**
     * @return ArticleDownloadInterface[]
     */
    public function getDownloads(): array
    {
        return $this->downloads;
    }

    /**
     * @param ArticleDownloadInterface[] $downloads
     *
     * @return ArticleInterface
     */
    public function setDownloads(array $downloads): ArticleInterface
    {
        $this->downloads = $downloads;

        return $this;
    }

    /**
     * @return ArticleCategoryInterface[]
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * @param ArticleCategoryInterface[] $categories
     *
     * @return ArticleInterface
     */
    public function setCategories(array $categories): ArticleInterface
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * @return ArticleSimilarInterface[]
     */
    public function getSimilar(): array
    {
        return $this->similar;
    }

    /**
     * @param ArticleSimilarInterface[] $similar
     *
     * @return ArticleInterface
     */
    public function setSimilar(array $similar): ArticleInterface
    {
        $this->similar = $similar;

        return $this;
    }

    /**
     * @return ArticleRelatedInterface[]
     */
    public function getRelated(): array
    {
        return $this->related;
    }

    /**
     * @param ArticleRelatedInterface[] $related
     *
     * @return ArticleInterface
     */
    public function setRelated(array $related): ArticleInterface
    {
        $this->related = $related;

        return $this;
    }

    /**
     * @return ArticleDetailInterface[]
     */
    public function getDetails(): array
    {
        return $this->details;
    }

    /**
     * @param ArticleDetailInterface[] $details
     *
     * @return ArticleInterface
     */
    public function setDetails(array $details): ArticleInterface
    {
        $this->details = $details;

        return $this;
    }

}