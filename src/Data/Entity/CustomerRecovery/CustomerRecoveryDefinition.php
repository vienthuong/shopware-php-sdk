<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CustomerRecovery;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerRecoveryDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'customer_recovery';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CustomerRecoveryEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CustomerRecoveryCollection::class;
    }
}
