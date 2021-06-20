<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\AclUserRole;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class AclUserRoleDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'acl_user_role';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return AclUserRoleEntity::class;
    }

    public function getEntityCollection() : string
    {
        return AclUserRoleCollection::class;
    }
}
