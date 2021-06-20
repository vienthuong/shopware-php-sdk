<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\OrderTransaction;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderTransactionDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'order_transaction';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return OrderTransactionEntity::class;
    }

    public function getEntityCollection() : string
    {
        return OrderTransactionCollection::class;
    }
}
