<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CountryStateTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CountryStateTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'country_state_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CountryStateTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CountryStateTranslationCollection::class;
    }
}
