<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\NumberRangeTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class NumberRangeTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'number_range_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return NumberRangeTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return NumberRangeTranslationCollection::class;
    }
}
