<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class ConfiguratorOption implements ConfiguratorOptionInterface
{

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $id;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $groupId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $name;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $position;

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
     * @return ConfiguratorOptionInterface
     */
    public function setId(int $id): ConfiguratorOptionInterface
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getGroupId(): int
    {
        return $this->groupId;
    }

    /**
     * @param int $groupId
     *
     * @return ConfiguratorOptionInterface
     */
    public function setGroupId(int $groupId): ConfiguratorOptionInterface
    {
        $this->groupId = $groupId;

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
     * @return ConfiguratorOptionInterface
     */
    public function setName(string $name): ConfiguratorOptionInterface
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
     * @return ConfiguratorOptionInterface
     */
    public function setPosition(int $position): ConfiguratorOptionInterface
    {
        $this->position = $position;

        return $this;
    }
}
