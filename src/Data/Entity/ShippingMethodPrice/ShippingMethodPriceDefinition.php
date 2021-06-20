<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ShippingMethodPrice;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ShippingMethodPriceDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'shipping_method_price';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ShippingMethodPriceEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ShippingMethodPriceCollection::class;
    }
}
