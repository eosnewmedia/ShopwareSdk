<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

use Enm\ShopwareSdk\Model\Manufacturer\ManufacturerInterface;
use Enm\ShopwareSdk\Model\RootModelInterface;
use Enm\ShopwareSdk\Model\Category\CategoryInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 * @author Nicklas Reincke <reincke@eosnewmedia.de>
 */
interface ArticleInterface extends RootModelInterface
{

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
    public function getDescriptionLong(): string;

    /**
     * @param string $descriptionLong
     *
     * @return ArticleInterface
     */
    public function setDescriptionLong(string $descriptionLong): ArticleInterface;

    /**
     * @return string
     */
    public function getAdded(): string;

    /**
     * @param string $added
     *
     * @return ArticleInterface
     */
    public function setAdded(string $added): ArticleInterface;

    /**
     * @return boolean
     */
    public function isActive(): bool;

    /**
     * @param boolean $active
     *
     * @return ArticleInterface
     */
    public function setActive(bool $active): ArticleInterface;

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
     * @return boolean
     */
    public function isHighlight(): bool;

    /**
     * @param boolean $highlight
     *
     * @return ArticleInterface
     */
    public function setHighlight(bool $highlight): ArticleInterface;

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
     * @return string
     */
    public function getChanged(): string;

    /**
     * @param string $changed
     *
     * @return ArticleInterface
     */
    public function setChanged(string $changed): ArticleInterface;

    /**
     * @return boolean
     */
    public function isPriceGroupActive(): bool;

    /**
     * @param boolean $priceGroupActive
     *
     * @return ArticleInterface
     */
    public function setPriceGroupActive(bool $priceGroupActive): ArticleInterface;

    /**
     * @return boolean
     */
    public function isLastStock(): bool;

    /**
     * @param boolean $lastStock
     *
     * @return ArticleInterface
     */
    public function setLastStock(bool $lastStock): ArticleInterface;

    /**
     * @return boolean
     */
    public function isCrossBundleLook(): bool;

    /**
     * @param boolean $crossBundleLook
     *
     * @return ArticleInterface
     */
    public function setCrossBundleLook(bool $crossBundleLook): ArticleInterface;

    /**
     * @return boolean
     */
    public function isNotification(): bool;

    /**
     * @param boolean $notification
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
     * @return string
     */
    public function getAvailableFrom(): string;

    /**
     * @param string $availableFrom
     *
     * @return ArticleInterface
     */
    public function setAvailableFrom(string $availableFrom): ArticleInterface;

    /**
     * @return string
     */
    public function getAvailableTo(): string;

    /**
     * @param string $availableTo
     *
     * @return ArticleInterface
     */
    public function setAvailableTo(string $availableTo): ArticleInterface;

    /**
     * @return DetailInterface
     */
    public function getMainDetail(): DetailInterface;

    /**
     * @return bool
     */
    public function hasMainDetail(): bool;

    /**
     * @param DetailInterface $mainDetail
     *
     * @return ArticleInterface
     */
    public function setMainDetail(DetailInterface $mainDetail): ArticleInterface;

    /**
     * @return TaxInterface
     */
    public function getTax(): TaxInterface;

    /**
     * @return bool
     */
    public function hasTax(): bool;

    /**
     * @param TaxInterface $tax
     *
     * @return ArticleInterface
     */
    public function setTax(TaxInterface $tax): ArticleInterface;

    /**
     * @return ManufacturerInterface
     */
    public function getSupplier(): ManufacturerInterface;

    /**
     * @return bool
     */
    public function hasSupplier(): bool;

    /**
     * @param ManufacturerInterface $supplier
     *
     * @return ArticleInterface
     */
    public function setSupplier(ManufacturerInterface $supplier): ArticleInterface;

    /**
     * @return PropertyGroupInterface
     */
    public function getPropertyGroup(): PropertyGroupInterface;

    /**
     * @return bool
     */
    public function hasPropertyGroup(): bool;

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
     * @return bool
     */
    public function hasConfiguratorSet(): bool;

    /**
     * @param ConfiguratorSetInterface $configuratorSet
     *
     * @return ArticleInterface
     */
    public function setConfiguratorSet(ConfiguratorSetInterface $configuratorSet): ArticleInterface;

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
     * @return PropertyValueInterface[]
     */
    public function getPropertyValues(): array;

    /**
     * @param array $propertyValues
     *
     * @return ArticleInterface
     */
    public function setPropertyValues(array $propertyValues): ArticleInterface;
}
