<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SalesChannel;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'sales_channel';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return SalesChannelEntity::class;
    }

    public function getEntityCollection() : string
    {
        return SalesChannelCollection::class;
    }
}
