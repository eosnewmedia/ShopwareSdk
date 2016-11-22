<?php
namespace Enm\ShopwareSdk\Model\Article;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface ConfiguratorSetInterface
{

    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return ConfiguratorSetInterface
     */
    public function setId(int $id) : ConfiguratorSetInterface;

    /**
     * @return string
     */
    public function getName() : string;

    /**
     * @param string $name
     *
     * @return ConfiguratorSetInterface
     */
    public function setName(string $name) : ConfiguratorSetInterface;

    /**
     * @return boolean
     */
    public function isPublic() : bool;

    /**
     * @param boolean $public
     *
     * @return ConfiguratorSetInterface
     */
    public function setPublic(bool $public) : ConfiguratorSetInterface;

    /**
     * @return int
     */
    public function getType() : int;

    /**
     * @param int $type
     *
     * @return ConfiguratorSetInterface
     */
    public function setType(int $type) : ConfiguratorSetInterface;

    /**
     * @return GroupInterface[]
     */
    public function getGroups() : array;

    /**
     * @param GroupInterface[] $groups
     *
     * @return ConfiguratorSetInterface
     */
    public function setGroups(array $groups) : ConfiguratorSetInterface;
}
