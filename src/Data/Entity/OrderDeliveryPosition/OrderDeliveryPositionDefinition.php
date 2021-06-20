<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\OrderDeliveryPosition;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderDeliveryPositionDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'order_delivery_position';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return OrderDeliveryPositionEntity::class;
    }

    public function getEntityCollection() : string
    {
        return OrderDeliveryPositionCollection::class;
    }
}
