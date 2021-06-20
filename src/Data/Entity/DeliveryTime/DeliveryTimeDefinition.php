<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\DeliveryTime;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class DeliveryTimeDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'delivery_time';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return DeliveryTimeEntity::class;
    }

    public function getEntityCollection() : string
    {
        return DeliveryTimeCollection::class;
    }
}
