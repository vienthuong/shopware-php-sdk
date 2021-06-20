<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CountryTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CountryTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'country_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CountryTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CountryTranslationCollection::class;
    }
}
