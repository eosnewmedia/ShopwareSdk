<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface PropertyValueInterface
{

    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @param int $id
     *
     * @return PropertyValueInterface
     */
    public function setId(int $id): PropertyValueInterface;

    /**
     * @return string
     */
    public function getValue(): string;

    /**
     * @param string $value
     *
     * @return PropertyValueInterface
     */
    public function setValue(string $value): PropertyValueInterface;

    /**
     * @return int
     */
    public function getPosition(): int;

    /**
     * @param int $position
     *
     * @return PropertyValueInterface
     */
    public function setPosition(int $position): PropertyValueInterface;

    /**
     * @return int
     */
    public function getOptionId(): int;

    /**
     * @param int $optionId
     *
     * @return PropertyValueInterface
     */
    public function setOptionId(int $optionId): PropertyValueInterface;

    /**
     * @return PropertyValueOptionInterface
     */
    public function getOption(): PropertyValueOptionInterface;

    /**
     * @param PropertyValueOptionInterface $option
     *
     * @return PropertyValueInterface
     */
    public function setOption(PropertyValueOptionInterface $option): PropertyValueInterface;
}
