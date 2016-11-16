<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 * @author Nicklas Reincke <reincke@eosnewmedia.de>
 */
interface ArticleInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @param int $id
     *
     * @return ArticleInterface
     */
    public function setId(int $id): ArticleInterface;

    /**
     * @return int
     */
    public function getMainDetailId(): int;

    /**
     * @param int $mainDetailId
     *
     * @return ArticleInterface
     */
    public function setMainDetailId(int $mainDetailId): ArticleInterface;

    /**
     * @return int
     */
    public function getSupplierId(): int;

    /**
     * @param int $supplierId
     *
     * @return ArticleInterface
     */
    public function setSupplierId(int $supplierId): ArticleInterface;

    /**
     * @return int
     */
    public function getTaxId(): int;

    /**
     * @param int $taxId
     *
     * @return ArticleInterface
     */
    public function setTaxId(int $taxId): ArticleInterface;

    /**
     * @return int
     */
    public function getPriceGroupId(): int;

    /**
     * @param int $priceGroupId
     *
     * @return ArticleInterface
     */
    public function setPriceGroupId(int $priceGroupId): ArticleInterface;

    /**
     * @return int
     */
    public function getFilterGroupId(): int;

    /**
     * @param int $filterGroupId
     *
     * @return ArticleInterface
     */
    public function setFilterGroupId(int $filterGroupId): ArticleInterface;

    /**
     * @return int
     */
    public function getConfiguratorSetId(): int;

    /**
     * @param int $configuratorSetId
     *
     * @return ArticleInterface
     */
    public function setConfiguratorSetId(int $configuratorSetId): ArticleInterface;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     *
     * @return ArticleInterface
     */
    public function setName(string $name): ArticleInterface;

    /**
     * @return string
     */
    public function getDescription(): string;

    /**
     * @param string $description
     *
     * @return ArticleInterface
     */
    public function setDescription(string $description): ArticleInterface;

    /**
     * @return string
     */
    public function getLongDescription(): string;

    /**
     * @param string $longDescription
     *
     * @return ArticleInterface
     */
    public function setLongDescription(string $longDescription): ArticleInterface;

    /**
     * Get the timestamp from when this article was added. (ISO8601)
     *
     * @return string
     */
    public function getAddedTimestamp(): string;

    /**
     * Set the timestamp from when this article was added. (ISO8601)
     *
     * @param string $addedTimestamp
     *
     * @return ArticleInterface
     */
    public function setAddedTimestamp(string $addedTimestamp): ArticleInterface;

    /**
     * @return bool
     */
    public function isActive(): bool;

    /**
     * @param bool $isActive
     *
     * @return ArticleInterface
     */
    public function setActive(bool $isActive): ArticleInterface;

    /**
     * @return int
     */
    public function getPseudoSales(): int;

    /**
     * @param int $pseudoSales
     *
     * @return ArticleInterface
     */
    public function setPseudoSales(int $pseudoSales): ArticleInterface;

    /**
     * @return bool
     */
    public function isHighlighted(): bool;

    /**
     * @param bool $isHighlighted
     *
     * @return ArticleInterface
     */
    public function setHighlighted(bool $isHighlighted): ArticleInterface;

    /**
     * @return string
     */
    public function getKeywords(): string;

    /**
     * @param string $keywords
     *
     * @return ArticleInterface
     */
    public function setKeywords(string $keywords): ArticleInterface;

    /**
     * @return string
     */
    public function getMetaTitle(): string;

    /**
     * @param string $metaTitle
     *
     * @return ArticleInterface
     */
    public function setMetaTitle(string $metaTitle): ArticleInterface;

    /**
     * Get the timestamp from when this article was changed. (ISO8601)
     *
     * @return string
     */
    public function getChangedTimestamp(): string;

    /**
     * Set the timestamp from when this article was changed. (ISO8601)
     *
     * @param string $changedTimestamp
     *
     * @return ArticleInterface
     */
    public function setChangedTimestamp(string $changedTimestamp): ArticleInterface;

    /**
     * @return bool
     */
    public function isPriceGroupActive(): bool;

    /**
     * @param bool $isPriceGroupActive
     *
     * @return ArticleInterface
     */
    public function setPriceGroupActive(bool $isPriceGroupActive): ArticleInterface;

    /**
     * @return bool
     */
    public function isLastStock(): bool;

    /**
     * @param bool $isLastStock
     *
     * @return ArticleInterface
     */
    public function setLastStock(bool $isLastStock): ArticleInterface;

    /**
     * @return bool
     */
    public function hasCrossBundleLook(): bool;

    /**
     * @param bool $isCrossBundleLook
     *
     * @return ArticleInterface
     */
    public function setCrossBundleLook(bool $isCrossBundleLook): ArticleInterface;

    /**
     * @return bool
     */
    public function hasNotification(): bool;

    /**
     * @param bool $notification
     *
     * @return ArticleInterface
     */
    public function setNotification(bool $notification): ArticleInterface;

    /**
     * @return string
     */
    public function getTemplate(): string;

    /**
     * @param string $template
     *
     * @return ArticleInterface
     */
    public function setTemplate(string $template): ArticleInterface;

    /**
     * @return int
     */
    public function getMode(): int;

    /**
     * @param int $mode
     *
     * @return ArticleInterface
     */
    public function setMode(int $mode): ArticleInterface;

    /**
     * Get the timestamp from when this article starts to be available. (ISO8601)
     *
     * @return string
     */
    public function getAvailableFromTimestamp(): string;

    /**
     * Set the timestamp from when this article starts to be available. (ISO8601)
     *
     * @param string $availableFromTimestamp
     *
     * @return ArticleInterface
     */
    public function setAvailableFromTimestamp(string $availableFromTimestamp): ArticleInterface;

    /**
     * Get the timestamp from when this article ends to be available. (ISO8601)
     *
     * @return string
     */
    public function getAvailableToTimestamp(): string;

    /**
     * Set the timestamp from when this article ends to be available. (ISO8601)
     *
     * @param string $availableToTimestamp
     *
     * @return ArticleInterface
     */
    public function setAvailableToTimestamp(string $availableToTimestamp): ArticleInterface;

    /**
     * @return DetailInterface
     */
    public function getMainDetail(): DetailInterface;

    /**
     * @param DetailInterface $mainDetail
     *
     * @return ArticleInterface
     */
    public function setMailDetail(DetailInterface $mainDetail): ArticleInterface;

    /**
     * @return TaxInterface
     */
    public function getTax(): TaxInterface;

    /**
     * @param TaxInterface $tax
     *
     * @return ArticleInterface
     */
    public function setTax(TaxInterface $tax): ArticleInterface;

    /**
     * @return PropertyValueInterface
     */
    public function getPropertyValue(): PropertyValueInterface;

    /**
     * @param PropertyValueInterface $propertyValue
     *
     * @return ArticleInterface
     */
    public function setPropertyValue(PropertyValueInterface $propertyValue): ArticleInterface;

    /**
     * @return SupplierInterface
     */
    public function getSupplier(): SupplierInterface;

    /**
     * @param SupplierInterface $supplier
     *
     * @return ArticleInterface
     */
    public function setSupplier(SupplierInterface $supplier): ArticleInterface;

    /**
     * @return PropertyGroupInterface
     */
    public function getPropertyGroup(): PropertyGroupInterface;

    /**
     * @param PropertyGroupInterface $propertyGroup
     *
     * @return ArticleInterface
     */
    public function setPropertyGroup(PropertyGroupInterface $propertyGroup): ArticleInterface;

    /**
     * @return CustomerGroupInterface[]
     */
    public function getCustomerGroups(): array;

    /**
     * @param CustomerGroupInterface[] $customerGroups
     *
     * @return ArticleInterface
     */
    public function setCustomerGroups(array $customerGroups): ArticleInterface;

    /**
     * @return ImageInterface[]
     */
    public function getImages(): array;

    /**
     * @param ImageInterface[] $images
     *
     * @return ArticleInterface
     */
    public function setImages(array $images): ArticleInterface;

    /**
     * @return ConfiguratorSetInterface
     */
    public function getConfiguratorSet(): ConfiguratorSetInterface;

    /**
     * @return LinkInterface[]
     */
    public function getLinks(): array;

    /**
     * @param LinkInterface[] $links
     *
     * @return ArticleInterface
     */
    public function setLinks(array $links): ArticleInterface;

    /**
     * @return DownloadInterface[]
     */
    public function getDownloads(): array;

    /**
     * @param DownloadInterface[] $downloads
     *
     * @return ArticleInterface
     */
    public function setDownloads(array $downloads): ArticleInterface;

    /**
     * @return CategoryInterface[]
     */
    public function getCategories(): array;

    /**
     * @param CategoryInterface[] $categories
     *
     * @return ArticleInterface
     */
    public function setCategories(array $categories): ArticleInterface;

    /**
     * @return SimilarInterface[]
     */
    public function getSimilar(): array;

    /**
     * @param SimilarInterface[] $similar
     *
     * @return ArticleInterface
     */
    public function setSimilar(array $similar): ArticleInterface;

    /**
     * @return RelatedInterface[]
     */
    public function getRelated(): array;

    /**
     * @param RelatedInterface[] $related
     *
     * @return ArticleInterface
     */
    public function setRelated(array $related): ArticleInterface;

    /**
     * @return DetailInterface[]
     */
    public function getDetails(): array;

    /**
     * @param DetailInterface[] $details
     *
     * @return ArticleInterface
     */
    public function setDetails(array $details): ArticleInterface;

    /**
     * @return TranslationInterface[]
     */
    public function getTranslations(): array;

    /**
     * @param TranslationInterface[] $translations
     *
     * @return ArticleInterface
     */
    public function setTranslations(array $translations): ArticleInterface;
}
