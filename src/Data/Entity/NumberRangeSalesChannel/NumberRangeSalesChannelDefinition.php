<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\NumberRangeSalesChannel;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class NumberRangeSalesChannelDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'number_range_sales_channel';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return NumberRangeSalesChannelEntity::class;
    }

    public function getEntityCollection() : string
    {
        return NumberRangeSalesChannelCollection::class;
    }
}
