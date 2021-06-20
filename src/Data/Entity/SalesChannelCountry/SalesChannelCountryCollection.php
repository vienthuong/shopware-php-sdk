<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SalesChannelCountry;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelCountryCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return SalesChannelCountryEntity::class;
    }
}
