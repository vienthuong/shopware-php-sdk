<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ShippingMethodTag;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ShippingMethodTagDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'shipping_method_tag';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ShippingMethodTagEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ShippingMethodTagCollection::class;
    }
}
