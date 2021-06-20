<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\UserAccessKey;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class UserAccessKeyDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'user_access_key';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return UserAccessKeyEntity::class;
    }

    public function getEntityCollection() : string
    {
        return UserAccessKeyCollection::class;
    }
}
