<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model;

/**
 * @author Nicklas Reincke <reincke@eosnewmedia.de>
 */
interface ArticleInterface extends RootModelInterface
{
    /**
     * @param int $id
     *
     * @return ArticleInterface
     */
    public function setId(int $id) : ArticleInterface;
    
    /**
     * @return int
     */
    public function getMainDetailId() : int;
    
    /**
     * @param int $mainDetailId
     *
     * @return ArticleInterface
     */
    public function setMainDetailId(int $mainDetailId) : ArticleInterface;
    
    /**
     * @return int
     */
    public function getSupplierId() : int;
    
    /**
     * @param int $supplierId
     *
     * @return ArticleInterface
     */
    public function setSupplierId(int $supplierId) : ArticleInterface;
    
    /**
     * @return int
     */
    public function getTaxId() : int;
    
    /**
     * @param int $taxId
     *
     * @return ArticleInterface
     */
    public function setTaxId(int $taxId) : ArticleInterface;
    
    /**
     * @return int
     */
    public function getPriceGroupId() : int;
    
    /**
     * @param int $priceGroupId
     *
     * @return ArticleInterface
     */
    public function setPriceGroupId(int $priceGroupId) : ArticleInterface;
    
    /**
     * @return int
     */
    public function getFilterGroupId() : int;
    
    /**
     * @param int $filterGroupId
     *
     * @return ArticleInterface
     */
    public function setFilterGroupId(int $filterGroupId) : ArticleInterface;
    
    /**
     * @return int
     */
    public function getConfiguratorSetId() : int;
    
    /**
     * @param int $configuratorSetId
     *
     * @return ArticleInterface
     */
    public function setConfiguratorSetId(int $configuratorSetId) : ArticleInterface;
    
    /**
     * @return string
     */
    public function getName() : string;
    
    /**
     * @param string $name
     *
     * @return ArticleInterface
     */
    public function setName(string $name) : ArticleInterface;
    
    /**
     * @return string
     */
    public function getDescription() : string;
    
    /**
     * @param string $description
     *
     * @return ArticleInterface
     */
    public function setDescription(string $description) : ArticleInterface;
    
    /**
     * @return string
     */
    public function getDescriptionLong() : string;
    
    /**
     * @param string $descriptionLong
     *
     * @return ArticleInterface
     */
    public function setDescriptionLong(string $descriptionLong) : ArticleInterface;
    
    /**
     * @return string
     */
    public function getAdded() : string;
    
    /**
     * @param string $added
     *
     * @return ArticleInterface
     */
    public function setAdded(string $added) : ArticleInterface;
    
    /**
     * @return boolean
     */
    public function isActive() : bool;
    
    /**
     * @param boolean $active
     *
     * @return ArticleInterface
     */
    public function setActive(bool $active) : ArticleInterface;
    
    /**
     * @return int
     */
    public function getPseudoSales() : int;
    
    /**
     * @param int $pseudoSales
     *
     * @return ArticleInterface
     */
    public function setPseudoSales(int $pseudoSales) : ArticleInterface;
    
    /**
     * @return boolean
     */
    public function isHighlight() : bool;
    
    /**
     * @param boolean $highlight
     *
     * @return ArticleInterface
     */
    public function setHighlight(bool $highlight) : ArticleInterface;
    
    /**
     * @return string
     */
    public function getKeywords() : string;
    
    /**
     * @param string $keywords
     *
     * @return ArticleInterface
     */
    public function setKeywords(string $keywords) : ArticleInterface;
    
    /**
     * @return string
     */
    public function getMetaTitle() : string;
    
    /**
     * @param string $metaTitle
     *
     * @return ArticleInterface
     */
    public function setMetaTitle(string $metaTitle) : ArticleInterface;
    
    /**
     * @return string
     */
    public function getChanged() : string;
    
    /**
     * @param string $changed
     *
     * @return ArticleInterface
     */
    public function setChanged(string $changed) : ArticleInterface;
    
    /**
     * @return boolean
     */
    public function isPriceGroupActive() : bool;
    
    /**
     * @param boolean $priceGroupActive
     *
     * @return ArticleInterface
     */
    public function setPriceGroupActive(bool $priceGroupActive) : ArticleInterface;
    
    /**
     * @return boolean
     */
    public function isLastStock() : bool;
    
    /**
     * @param boolean $lastStock
     *
     * @return ArticleInterface
     */
    public function setLastStock(bool $lastStock) : ArticleInterface;
    
    /**
     * @return boolean
     */
    public function isCrossBundleLook() : bool;
    
    /**
     * @param boolean $crossBundleLook
     *
     * @return ArticleInterface
     */
    public function setCrossBundleLook(bool $crossBundleLook) : ArticleInterface;
    
    /**
     * @return boolean
     */
    public function isNotification() : bool;
    
    /**
     * @param boolean $notification
     *
     * @return ArticleInterface
     */
    public function setNotification(bool $notification) : ArticleInterface;
    
    /**
     * @return string
     */
    public function getTemplate() : string;
    
    /**
     * @param string $template
     *
     * @return ArticleInterface
     */
    public function setTemplate(string $template) : ArticleInterface;
    
    /**
     * @return int
     */
    public function getMode() : int;
    
    /**
     * @param int $mode
     *
     * @return ArticleInterface
     */
    public function setMode(int $mode) : ArticleInterface;
    
    /**
     * @return string
     */
    public function getAvailableFrom() : string;
    
    /**
     * @param string $availableFrom
     *
     * @return ArticleInterface
     */
    public function setAvailableFrom(string $availableFrom) : ArticleInterface;
    
    /**
     * @return string
     */
    public function getAvailableTo() : string;
    
    /**
     * @param string $availableTo
     *
     * @return ArticleInterface
     */
    public function setAvailableTo(string $availableTo) : ArticleInterface;
    
    /**
     * @return ArticleDetailInterface
     */
    public function getMainDetail() : ArticleDetailInterface;
    
    /**
     * @param ArticleDetailInterface $mainDetail
     *
     * @return ArticleInterface
     */
    public function setMainDetail(ArticleDetailInterface $mainDetail) : ArticleInterface;
    
    /**
     * @return TaxInterface
     */
    public function getTax() : TaxInterface;
    
    /**
     * @param TaxInterface $tax
     *
     * @return ArticleInterface
     */
    public function setTax(TaxInterface $tax) : ArticleInterface;
    
    /**
     * @return PropertyValueInterface[]
     */
    public function getPropertyValues() : array;
    
    /**
     * @param PropertyValueInterface[] $propertyValues
     *
     * @return ArticleInterface
     */
    public function setPropertyValues(array $propertyValues) : ArticleInterface;
    
    /**
     * @return ArticleSupplierInterface
     */
    public function getSupplier() : ArticleSupplierInterface;
    
    /**
     * @param ArticleSupplierInterface $supplier
     *
     * @return ArticleInterface
     */
    public function setSupplier(ArticleSupplierInterface $supplier) : ArticleInterface;
    
    /**
     * @return PropertyGroupInterface
     */
    public function getPropertyGroup() : PropertyGroupInterface;
    
    /**
     * @param PropertyGroupInterface $propertyGroup
     *
     * @return ArticleInterface
     */
    public function setPropertyGroup(PropertyGroupInterface $propertyGroup) : ArticleInterface;
    
    /**
     * @return CustomerGroupInterface[]
     */
    public function getCustomerGroups() : array;
    
    /**
     * @param CustomerGroupInterface[] $customerGroups
     *
     * @return ArticleInterface
     */
    public function setCustomerGroups(array $customerGroups) : ArticleInterface;
    
    /**
     * @return ArticleImageInterface[]
     */
    public function getImages() : array;
    
    /**
     * @param ArticleImageInterface[] $images
     *
     * @return ArticleInterface
     */
    public function setImages(array $images) : ArticleInterface;
    
    /**
     * @return ArticleConfiguratorSetInterface
     */
    public function getConfiguratorSet() : ArticleConfiguratorSetInterface;
    
    /**
     * @param ArticleConfiguratorSetInterface $configuratorSet
     *
     * @return ArticleInterface
     */
    public function setConfiguratorSet(ArticleConfiguratorSetInterface $configuratorSet) : ArticleInterface;
    
    /**
     * @return ArticleLinkInterface[]
     */
    public function getLinks() : array;
    
    /**
     * @param ArticleLinkInterface[] $links
     *
     * @return ArticleInterface
     */
    public function setLinks(array $links) : ArticleInterface;
    
    /**
     * @return ArticleDownloadInterface[]
     */
    public function getDownloads() : array;
    
    /**
     * @param ArticleDownloadInterface[] $downloads
     *
     * @return ArticleInterface
     */
    public function setDownloads(array $downloads) : ArticleInterface;
    
    /**
     * @return ArticleCategoryInterface[]
     */
    public function getCategories() : array;
    
    /**
     * @param ArticleCategoryInterface[] $categories
     *
     * @return ArticleInterface
     */
    public function setCategories(array $categories) : ArticleInterface;
    
    /**
     * @return ArticleSimilarInterface[]
     */
    public function getSimilar() : array;
    
    /**
     * @param ArticleSimilarInterface[] $similar
     *
     * @return ArticleInterface
     */
    public function setSimilar(array $similar) : ArticleInterface;
    
    /**
     * @return ArticleRelatedInterface[]
     */
    public function getRelated() : array;
    
    /**
     * @param ArticleRelatedInterface[] $related
     *
     * @return ArticleInterface
     */
    public function setRelated(array $related) : ArticleInterface;
    
    /**
     * @return ArticleDetailInterface[]
     */
    public function getDetails() : array;
    
    /**
     * @param ArticleDetailInterface[] $details
     *
     * @return ArticleInterface
     */
    public function setDetails(array $details) : ArticleInterface;
}