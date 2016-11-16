<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk;

use Enm\ShopwareSdk\Endpoint\AddressEndpointInterface;
use Enm\ShopwareSdk\Endpoint\ArticleEndpointInterface;
use Enm\ShopwareSdk\Endpoint\CategoryEndpointInterface;
use Enm\ShopwareSdk\Endpoint\CountryEndpointInterface;
use Enm\ShopwareSdk\Endpoint\CustomerEndpointInterface;
use Enm\ShopwareSdk\Endpoint\CustomerGroupEndpointInterface;
use Enm\ShopwareSdk\Endpoint\MediaEndpointInterface;
use Enm\ShopwareSdk\Endpoint\OrderEndpointInterface;
use Enm\ShopwareSdk\Endpoint\PropertyGroupEndpointInterface;
use Enm\ShopwareSdk\Endpoint\VariantEndpointInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface EntryPointInterface
{

    /**
     * @return AddressEndpointInterface
     */
    public function addresses(): AddressEndpointInterface;

    /**
     * @return ArticleEndpointInterface
     */
    public function articles(): ArticleEndpointInterface;

    /**
     * @return CategoryEndpointInterface
     */
    public function categories(): CategoryEndpointInterface;

    /**
     * @return CountryEndpointInterface
     */
    public function countries(): CountryEndpointInterface;

    /**
     * @return CustomerGroupEndpointInterface
     */
    public function customerGroups(): CustomerGroupEndpointInterface;

    /**
     * @return CustomerEndpointInterface
     */
    public function customers(): CustomerEndpointInterface;

    /**
     * @return MediaEndpointInterface
     */
    public function media(): MediaEndpointInterface;

    /**
     * @return OrderEndpointInterface
     */
    public function orders(): OrderEndpointInterface;

    /**
     * @return PropertyGroupEndpointInterface
     */
    public function propertyGroups(): PropertyGroupEndpointInterface;

    /**
     * @return VariantEndpointInterface
     */
    public function variants(): VariantEndpointInterface;

}
