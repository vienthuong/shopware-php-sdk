<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SalesChannelType;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelTypeDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'sales_channel_type';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return SalesChannelTypeEntity::class;
    }

    public function getEntityCollection() : string
    {
        return SalesChannelTypeCollection::class;
    }
}
