<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Manufacturer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface ManufacturerInterface {
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @param int $id
     * @return ManufacturerInterface
     */
    public function setId(int $id): ManufacturerInterface;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     * @return ManufacturerInterface
     */
    public function setName(string $name): ManufacturerInterface;

    /**
     * @return string
     */
    public function getImage(): string;

    /**
     * @param string $image
     * @return ManufacturerInterface
     */
    public function setImage(string $image): ManufacturerInterface;

    /**
     * @return string
     */
    public function getLink(): string;

    /**
     * @param string $link
     * @return ManufacturerInterface
     */
    public function setLink(string $link): ManufacturerInterface;

    /**
     * @return string
     */
    public function getDescription(): string;

    /**
     * @param string $description
     * @return ManufacturerInterface
     */
    public function setDescription(string $description): ManufacturerInterface;

    /**
     * @return string
     */
    public function getMetaTitle(): string;

    /**
     * @param string $metaTitle
     * @return ManufacturerInterface
     */
    public function setMetaTitle(string $metaTitle): ManufacturerInterface;

    /**
     * @return string
     */
    public function getMetaDescription(): string;

    /**
     * @param string $metaDescription
     * @return ManufacturerInterface
     */
    public function setMetaDescription(string $metaDescription): ManufacturerInterface;

    /**
     * @return string
     */
    public function getMetaKeywords(): string;

    /**
     * @param string $metaKeywords
     * @return ManufacturerInterface
     */
    public function setMetaKeywords(string $metaKeywords): ManufacturerInterface;
}
