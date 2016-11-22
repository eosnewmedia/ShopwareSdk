<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model;

/**
 * @author Nicklas Reincke <reincke@eosnewmedia.de>
 */
interface TaxInterface
{
    /**
     * @return int
     */
    public function getId() : int;

    /**
     * @param int $id
     *
     * @return TaxInterface
     */
    public function setId(int $id) : TaxInterface;

    /**
     * @return string
     */
    public function getTax() : string;

    /**
     * @param string $tax
     *
     * @return TaxInterface
     */
    public function setTax(string $tax) : TaxInterface;

    /**
     * @return string
     */
    public function getName() : string;

    /**
     * @param string $name
     *
     * @return TaxInterface
     */
    public function setName(string $name) : TaxInterface;
}