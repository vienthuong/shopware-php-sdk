<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SalesChannelCountry;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelCountryDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'sales_channel_country';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return SalesChannelCountryEntity::class;
    }

    public function getEntityCollection() : string
    {
        return SalesChannelCountryCollection::class;
    }
}
