<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\OrderDelivery;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderDeliveryDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'order_delivery';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return OrderDeliveryEntity::class;
    }

    public function getEntityCollection() : string
    {
        return OrderDeliveryCollection::class;
    }
}
