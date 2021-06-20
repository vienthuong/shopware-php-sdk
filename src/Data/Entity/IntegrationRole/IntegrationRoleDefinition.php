<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\IntegrationRole;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class IntegrationRoleDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'integration_role';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return IntegrationRoleEntity::class;
    }

    public function getEntityCollection() : string
    {
        return IntegrationRoleCollection::class;
    }
}
