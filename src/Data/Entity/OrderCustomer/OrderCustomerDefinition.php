<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\OrderCustomer;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderCustomerDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'order_customer';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return OrderCustomerEntity::class;
    }

    public function getEntityCollection() : string
    {
        return OrderCustomerCollection::class;
    }
}
