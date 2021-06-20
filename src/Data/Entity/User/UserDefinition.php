<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\User;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class UserDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'user';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return UserEntity::class;
    }

    public function getEntityCollection() : string
    {
        return UserCollection::class;
    }
}
