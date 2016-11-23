<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Nicklas Reincke <reincke@eosnewmedia.de>
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Tax implements TaxInterface
{

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $id;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $tax;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $name;

    /**
     * @return int
     */
    public function getId(): int
    {
        return (int)$this->id;
    }

    /**
     * @param int $id
     *
     * @return TaxInterface
     */
    public function setId(int $id): TaxInterface
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getTax(): string
    {
        return (string)$this->tax;
    }

    /**
     * @param string $tax
     *
     * @return TaxInterface
     */
    public function setTax(string $tax): TaxInterface
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return (string)$this->name;
    }

    /**
     * @param string $name
     *
     * @return TaxInterface
     */
    public function setName(string $name): TaxInterface
    {
        $this->name = $name;

        return $this;
    }
}
