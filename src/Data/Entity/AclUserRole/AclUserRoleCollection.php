<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\AclUserRole;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class AclUserRoleCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return AclUserRoleEntity::class;
    }
}
