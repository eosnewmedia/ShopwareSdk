<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface EntryPointInterface
{

    public function addresses();

    public function articles();

    public function categories();

    public function countries();

    public function customerGroups();

    public function customers();

    public function media();

    public function orders();

    public function propertyGroups();

    public function variants();

}
