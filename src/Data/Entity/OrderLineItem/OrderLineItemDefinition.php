<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\OrderLineItem;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderLineItemDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'order_line_item';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return OrderLineItemEntity::class;
    }

    public function getEntityCollection() : string
    {
        return OrderLineItemCollection::class;
    }
}
