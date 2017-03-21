<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface PropertyValueOptionInterface
{

    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @param int $id
     *
     * @return PropertyValueOptionInterface
     */
    public function setId(int $id): PropertyValueOptionInterface;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     *
     * @return PropertyValueOptionInterface
     */
    public function setName(string $name): PropertyValueOptionInterface;
}
