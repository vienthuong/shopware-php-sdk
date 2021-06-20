<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\OrderAddress;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderAddressDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'order_address';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return OrderAddressEntity::class;
    }

    public function getEntityCollection() : string
    {
        return OrderAddressCollection::class;
    }
}
