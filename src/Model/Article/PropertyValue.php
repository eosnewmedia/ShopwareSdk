<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class PropertyValue implements PropertyValueInterface
{

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id")
     */
    private $id;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("value")
     */
    private $value;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("position")
     */
    private $position;

    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("optionId")
     */
    private $optionId;

    /**
     * @var PropertyValueOptionInterface
     * @Serializer\Type("Enm\ShopwareSdk\Model\Article\PropertyValueOption")
     * @Serializer\SerializedName("option")
     */
    private $option;

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
     * @return PropertyValueInterface
     */
    public function setId(int $id): PropertyValueInterface
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return PropertyValueInterface
     */
    public function setValue(string $value): PropertyValueInterface
    {
        $this->value = $value;

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
     * @return PropertyValueInterface
     */
    public function setPosition(int $position): PropertyValueInterface
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return int
     */
    public function getOptionId(): int
    {
        return $this->optionId;
    }

    /**
     * @param int $optionId
     *
     * @return PropertyValueInterface
     */
    public function setOptionId(int $optionId): PropertyValueInterface
    {
        $this->optionId = $optionId;

        return $this;
    }

    /**
     * @return PropertyValueOptionInterface
     */
    public function getOption(): PropertyValueOptionInterface
    {
        return $this->option;
    }

    /**
     * @param PropertyValueOptionInterface $option
     *
     * @return PropertyValueInterface
     */
    public function setOption(PropertyValueOptionInterface $option): PropertyValueInterface
    {
        $this->option = $option;

        return $this;
    }
}
