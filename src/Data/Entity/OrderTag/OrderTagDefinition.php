<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\OrderTag;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderTagDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'order_tag';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return OrderTagEntity::class;
    }

    public function getEntityCollection() : string
    {
        return OrderTagCollection::class;
    }
}
