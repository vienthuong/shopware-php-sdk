<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\NumberRangeTypeTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class NumberRangeTypeTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'number_range_type_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return NumberRangeTypeTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return NumberRangeTypeTranslationCollection::class;
    }
}
