<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\UserRecovery;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class UserRecoveryDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'user_recovery';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return UserRecoveryEntity::class;
    }

    public function getEntityCollection() : string
    {
        return UserRecoveryCollection::class;
    }
}
