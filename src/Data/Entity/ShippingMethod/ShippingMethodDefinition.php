<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ShippingMethod;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ShippingMethodDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'shipping_method';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ShippingMethodEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ShippingMethodCollection::class;
    }
}
