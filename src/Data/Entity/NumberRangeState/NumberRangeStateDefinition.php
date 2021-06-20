<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\NumberRangeState;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class NumberRangeStateDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'number_range_state';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return NumberRangeStateEntity::class;
    }

    public function getEntityCollection() : string
    {
        return NumberRangeStateCollection::class;
    }
}
