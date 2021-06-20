<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SalesChannelShippingMethod;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelShippingMethodDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'sales_channel_shipping_method';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return SalesChannelShippingMethodEntity::class;
    }

    public function getEntityCollection() : string
    {
        return SalesChannelShippingMethodCollection::class;
    }
}
