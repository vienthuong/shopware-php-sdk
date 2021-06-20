<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Country;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CountryDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'country';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CountryEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CountryCollection::class;
    }
}
