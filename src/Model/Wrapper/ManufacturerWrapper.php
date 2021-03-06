<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Wrapper;

use Enm\ShopwareSdk\Model\Manufacturer\Manufacturer;
use Enm\ShopwareSdk\Model\RootModelInterface;
use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class ManufacturerWrapper implements WrapperInterface
{

    /**
     * @var Manufacturer
     * @Serializer\Type("Enm\ShopwareSdk\Model\Manufacturer\Manufacturer")
     * @Serializer\SerializedName("data")
     */
    private $data;

    /**
     * @return RootModelInterface
     */
    public function getData(): RootModelInterface
    {
        return $this->data;
    }

    /**
     * @param RootModelInterface $model
     *
     * @return WrapperInterface
     */
    public function setData(RootModelInterface $model): WrapperInterface
    {
        $this->data = $model;

        return $this;
    }

}
