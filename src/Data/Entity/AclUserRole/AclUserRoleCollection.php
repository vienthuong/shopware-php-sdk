<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\AclUserRole;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(AclUserRoleEntity $entity)
 * @method void set(string $key, AclUserRoleEntity $entity)
 * @method AclUserRoleEntity[] getIterator()
 * @method AclUserRoleEntity[] getElements()
 * @method AclUserRoleEntity|null get(string $key)
 * @method AclUserRoleEntity|null first()
 * @method AclUserRoleEntity|null last()
 */
class AclUserRoleCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return AclUserRoleEntity::class;
    }
}
