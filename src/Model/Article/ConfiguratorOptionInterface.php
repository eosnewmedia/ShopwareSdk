<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface ConfiguratorOptionInterface
{

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return ConfiguratorOptionInterface
     */
    public function setId(int $id) : ConfiguratorOptionInterface;

    /**
     * @return int
     */
    public function getGroupId() : int;

    /**
     * @param int $groupId
     *
     * @return ConfiguratorOptionInterface
     */
    public function setGroupId(int $groupId) : ConfiguratorOptionInterface;

    /**
     * @return string
     */
    public function getName() : string;

    /**
     * @param string $name
     *
     * @return ConfiguratorOptionInterface
     */
    public function setName(string $name) : ConfiguratorOptionInterface;

    /**
     * @return int
     */
    public function getPosition() : int;

    /**
     * @param int $position
     *
     * @return ConfiguratorOptionInterface
     */
    public function setPosition(int $position) : ConfiguratorOptionInterface;
}
