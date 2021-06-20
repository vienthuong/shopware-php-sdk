<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Order;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'order';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return OrderEntity::class;
    }

    public function getEntityCollection() : string
    {
        return OrderCollection::class;
    }
}
