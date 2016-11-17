<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model;

/**
 * @author Nicklas Reincke <reincke@eosnewmedia.de>
 */
class Category implements CategoryInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $parentId;

    /**
     * @var int
     */
    private $streamId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $position;

    /**
     * @var string
     */
    private $metaTitle;

    /**
     * @var string
     */
    private $metaKeywords;

    /**
     * @var string
     */
    private $metaDescription;

    /**
     * @var string
     */
    private $cmsHeadline;

    /**
     * @var string
     */
    private $cmsText;

    /**
     * @var bool
     */
    private $active;

    /**
     * @var string
     */
    private $template;

    /**
     * @var string
     */
    private $productBoxLayout;

    /**
     * @var bool
     */
    private $blog;

    /**
     * @var string
     */
    private $path;

    /**
     * @var bool
     */
    private $showFilterGroups;

    /**
     * @var bool
     */
    private $external;

    /**
     * @var bool
     */
    private $hideFilter;

    /**
     * @var bool
     */
    private $hideTop;

    /**
     * Date and time formatted in ISO8601 format.
     *
     * @var string
     */
    private $changed;

    /**
     * Date and time formatted in ISO8601 format.
     *
     * @var string
     */
    private $added;

    /**
     * @var int
     */
    private $mediaId;

    /**
     * @var array
     */
    private $attributes;

    /**
     * @var array
     */
    private $emotions;

    /**
     * @var MediaInterface
     */
    private $media;

    /**
     * @var array
     */
    private $customerGroups;

    /**
     * @var int
     */
    private $childrenCount;

    /**
     * @var int
     */
    private $articleCount;

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
     * @return CategoryInterface
     */
    public function setId(int $id): CategoryInterface
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getParentId(): int
    {
        return $this->parentId;
    }

    /**
     * @param int $parentId
     *
     * @return CategoryInterface
     */
    public function setParentId(int $parentId): CategoryInterface
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * @return int
     */
    public function getStreamId(): int
    {
        return $this->streamId;
    }

    /**
     * @param int $streamId
     *
     * @return CategoryInterface
     */
    public function setStreamId(int $streamId): CategoryInterface
    {
        $this->streamId = $streamId;

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
     * @return CategoryInterface
     */
    public function setName(string $name): CategoryInterface
    {
        $this->name = $name;

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
     * @return CategoryInterface
     */
    public function setPosition(int $position): CategoryInterface
    {
        $this->position = $position;

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
     * @return CategoryInterface
     */
    public function setMetaTitle(string $metaTitle): CategoryInterface
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    /**
     * @return string
     */
    public function getMetaKeywords(): string
    {
        return $this->metaKeywords;
    }

    /**
     * @param string $metaKeywords
     *
     * @return CategoryInterface
     */
    public function setMetaKeywords(string $metaKeywords): CategoryInterface
    {
        $this->metaKeywords = $metaKeywords;

        return $this;
    }

    /**
     * @return string
     */
    public function getMetaDescription(): string
    {
        return $this->metaDescription;
    }

    /**
     * @param string $metaDescription
     *
     * @return CategoryInterface
     */
    public function setMetaDescription(string $metaDescription): CategoryInterface
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getCmsHeadline(): string
    {
        return $this->cmsHeadline;
    }

    /**
     * @param string $cmsHeadline
     *
     * @return CategoryInterface
     */
    public function setCmsHeadline(string $cmsHeadline): CategoryInterface
    {
        $this->cmsHeadline = $cmsHeadline;

        return $this;
    }

    /**
     * @return string
     */
    public function getCmsText(): string
    {
        return $this->cmsText;
    }

    /**
     * @param string $cmsText
     *
     * @return CategoryInterface
     */
    public function setCmsText(string $cmsText): CategoryInterface
    {
        $this->cmsText = $cmsText;

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
     * @return CategoryInterface
     */
    public function setActive(bool $active): CategoryInterface
    {
        $this->active = $active;

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
     * @return CategoryInterface
     */
    public function setTemplate(string $template): CategoryInterface
    {
        $this->template = $template;

        return $this;
    }

    /**
     * @return string
     */
    public function getProductBoxLayout(): string
    {
        return $this->productBoxLayout;
    }

    /**
     * @param string $productBoxLayout
     *
     * @return CategoryInterface
     */
    public function setProductBoxLayout(string $productBoxLayout): CategoryInterface
    {
        $this->productBoxLayout = $productBoxLayout;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isBlog(): bool
    {
        return $this->blog;
    }

    /**
     * @param boolean $blog
     *
     * @return CategoryInterface
     */
    public function setBlog(bool $blog): CategoryInterface
    {
        $this->blog = $blog;

        return $this;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $path
     *
     * @return CategoryInterface
     */
    public function setPath(string $path): CategoryInterface
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isShowFilterGroups(): bool
    {
        return $this->showFilterGroups;
    }

    /**
     * @param boolean $showFilterGroups
     *
     * @return CategoryInterface
     */
    public function setShowFilterGroups(bool $showFilterGroups): CategoryInterface
    {
        $this->showFilterGroups = $showFilterGroups;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isExternal(): bool
    {
        return $this->external;
    }

    /**
     * @param boolean $external
     *
     * @return CategoryInterface
     */
    public function setExternal(bool $external): CategoryInterface
    {
        $this->external = $external;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isHideFilter(): bool
    {
        return $this->hideFilter;
    }

    /**
     * @param boolean $hideFilter
     *
     * @return CategoryInterface
     */
    public function setHideFilter(bool $hideFilter): CategoryInterface
    {
        $this->hideFilter = $hideFilter;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isHideTop(): bool
    {
        return $this->hideTop;
    }

    /**
     * @param boolean $hideTop
     *
     * @return CategoryInterface
     */
    public function setHideTop(bool $hideTop): CategoryInterface
    {
        $this->hideTop = $hideTop;

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
     * @return CategoryInterface
     */
    public function setChanged(string $changed): CategoryInterface
    {
        $this->changed = $changed;

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
     * @return CategoryInterface
     */
    public function setAdded(string $added): CategoryInterface
    {
        $this->added = $added;

        return $this;
    }

    /**
     * @return int
     */
    public function getMediaId(): int
    {
        return $this->mediaId;
    }

    /**
     * @param int $mediaId
     *
     * @return CategoryInterface
     */
    public function setMediaId(int $mediaId): CategoryInterface
    {
        $this->mediaId = $mediaId;

        return $this;
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param array $attributes
     *
     * @return CategoryInterface
     */
    public function setAttributes(array $attributes): CategoryInterface
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @return array
     */
    public function getEmotions(): array
    {
        return $this->emotions;
    }

    /**
     * @param array $emotions
     *
     * @return CategoryInterface
     */
    public function setEmotions(array $emotions): CategoryInterface
    {
        $this->emotions = $emotions;

        return $this;
    }

    /**
     * @return MediaInterface
     */
    public function getMedia(): MediaInterface
    {
        return $this->media;
    }

    /**
     * @param MediaInterface $media
     *
     * @return CategoryInterface
     */
    public function setMedia(MediaInterface $media): CategoryInterface
    {
        $this->media = $media;

        return $this;
    }

    /**
     * @return array
     */
    public function getCustomerGroups(): array
    {
        return $this->customerGroups;
    }

    /**
     * @param array $customerGroups
     *
     * @return CategoryInterface
     */
    public function setCustomerGroups(array $customerGroups): CategoryInterface
    {
        $this->customerGroups = $customerGroups;

        return $this;
    }

    /**
     * @return int
     */
    public function getChildrenCount(): int
    {
        return $this->childrenCount;
    }

    /**
     * @param int $childrenCount
     *
     * @return CategoryInterface
     */
    public function setChildrenCount(int $childrenCount): CategoryInterface
    {
        $this->childrenCount = $childrenCount;

        return $this;
    }

    /**
     * @return int
     */
    public function getArticleCount(): int
    {
        return $this->articleCount;
    }

    /**
     * @param int $articleCount
     *
     * @return CategoryInterface
     */
    public function setArticleCount(int $articleCount): CategoryInterface
    {
        $this->articleCount = $articleCount;

        return $this;
    }

}
