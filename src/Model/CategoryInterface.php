<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model;

/**
 * @author Nicklas Reincke <reincke@eosnewmedia.de>
 */
interface CategoryInterface
{
    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return CategoryInterface
     */
    public function setId(int $id) : CategoryInterface;

    /**
     * @return int
     */
    public function getParentId() : int;

    /**
     * @param int $parentId
     *
     * @return CategoryInterface
     */
    public function setParentId(int $parentId) : CategoryInterface;

    /**
     * @return int
     */
    public function getStreamId() : int;

    /**
     * @param int $streamId
     *
     * @return CategoryInterface
     */
    public function setStreamId(int $streamId) : CategoryInterface;

    /**
     * @return string
     */
    public function getName() : string;

    /**
     * @param string $name
     *
     * @return CategoryInterface
     */
    public function setName(string $name) : CategoryInterface;

    /**
     * @return int
     */
    public function getPosition() : int;

    /**
     * @param int $position
     *
     * @return CategoryInterface
     */
    public function setPosition(int $position) : CategoryInterface;

    /**
     * @return string
     */
    public function getMetaTitle() : string;

    /**
     * @param string $metaTitle
     *
     * @return CategoryInterface
     */
    public function setMetaTitle(string $metaTitle) : CategoryInterface;

    /**
     * @return string
     */
    public function getMetaKeywords() : string;

    /**
     * @param string $metaKeywords
     *
     * @return CategoryInterface
     */
    public function setMetaKeywords(string $metaKeywords) : CategoryInterface;

    /**
     * @return string
     */
    public function getMetaDescription() : string;

    /**
     * @param string $metaDescription
     *
     * @return CategoryInterface
     */
    public function setMetaDescription(string $metaDescription) : CategoryInterface;

    /**
     * @return string
     */
    public function getCmsHeadline() : string;

    /**
     * @param string $cmsHeadline
     *
     * @return CategoryInterface
     */
    public function setCmsHeadline(string $cmsHeadline) : CategoryInterface;

    /**
     * @return string
     */
    public function getCmsText() : string;

    /**
     * @param string $cmsText
     *
     * @return CategoryInterface
     */
    public function setCmsText(string $cmsText) : CategoryInterface;

    /**
     * @return boolean
     */
    public function isActive() : bool;

    /**
     * @param boolean $active
     *
     * @return CategoryInterface
     */
    public function setActive(bool $active) : CategoryInterface;

    /**
     * @return string
     */
    public function getTemplate() : string;

    /**
     * @param string $template
     *
     * @return CategoryInterface
     */
    public function setTemplate(string $template) : CategoryInterface;

    /**
     * @return string
     */
    public function getProductBoxLayout() : string;

    /**
     * @param string $productBoxLayout
     *
     * @return CategoryInterface
     */
    public function setProductBoxLayout(string $productBoxLayout) : CategoryInterface;

    /**
     * @return boolean
     */
    public function isBlog() : bool;

    /**
     * @param boolean $blog
     *
     * @return CategoryInterface
     */
    public function setBlog(bool $blog) : CategoryInterface;

    /**
     * @return string
     */
    public function getPath() : string;

    /**
     * @param string $path
     *
     * @return CategoryInterface
     */
    public function setPath(string $path) : CategoryInterface;

    /**
     * @return boolean
     */
    public function isShowFilterGroups() : bool;

    /**
     * @param boolean $showFilterGroups
     *
     * @return CategoryInterface
     */
    public function setShowFilterGroups(bool $showFilterGroups) : CategoryInterface;

    /**
     * @return boolean
     */
    public function isExternal() : bool;

    /**
     * @param boolean $external
     *
     * @return CategoryInterface
     */
    public function setExternal(bool $external) : CategoryInterface;

    /**
     * @return boolean
     */
    public function isHideFilter() : bool;

    /**
     * @param boolean $hideFilter
     *
     * @return CategoryInterface
     */
    public function setHideFilter(bool $hideFilter) : CategoryInterface;

    /**
     * @return boolean
     */
    public function isHideTop() : bool;

    /**
     * @param boolean $hideTop
     *
     * @return CategoryInterface
     */
    public function setHideTop(bool $hideTop) : CategoryInterface;

    /**
     * @return string
     */
    public function getChanged() : string;

    /**
     * @param string $changed
     *
     * @return CategoryInterface
     */
    public function setChanged(string $changed) : CategoryInterface;

    /**
     * @return string
     */
    public function getAdded() : string;

    /**
     * @param string $added
     *
     * @return CategoryInterface
     */
    public function setAdded(string $added) : CategoryInterface;

    /**
     * @return int
     */
    public function getMediaId() : int;

    /**
     * @param int $mediaId
     *
     * @return CategoryInterface
     */
    public function setMediaId(int $mediaId) : CategoryInterface;

    /**
     * @return array
     */
    public function getAttributes() : array;

    /**
     * @param array $attributes
     *
     * @return CategoryInterface
     */
    public function setAttributes(array $attributes) : CategoryInterface;

    /**
     * @return array
     */
    public function getEmotions() : array;

    /**
     * @param array $emotions
     *
     * @return CategoryInterface
     */
    public function setEmotions(array $emotions) : CategoryInterface;

    /**
     * @return MediaInterface
     */
    public function getMedia() : MediaInterface;

    /**
     * @param MediaInterface $media
     *
     * @return CategoryInterface
     */
    public function setMedia(MediaInterface $media) : CategoryInterface;

    /**
     * @return array
     */
    public function getCustomerGroups() : array;

    /**
     * @param array $customerGroups
     *
     * @return CategoryInterface
     */
    public function setCustomerGroups(array $customerGroups) : CategoryInterface;

    /**
     * @return int
     */
    public function getChildrenCount() : int;

    /**
     * @param int $childrenCount
     *
     * @return CategoryInterface
     */
    public function setChildrenCount(int $childrenCount) : CategoryInterface;

    /**
     * @return int
     */
    public function getArticleCount() : int;

    /**
     * @param int $articleCount
     *
     * @return CategoryInterface
     */
    public function setArticleCount(int $articleCount) : CategoryInterface;
}
