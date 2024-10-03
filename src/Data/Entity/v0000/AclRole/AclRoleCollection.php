<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\AclRole;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(AclRoleEntity $entity)
 * @method void set(AclRoleEntity $entity)
 * @method AclRoleEntity[] getIterator()
 * @method AclRoleEntity[] getElements()
 * @method AclRoleEntity|null get(string $key)
 * @method AclRoleEntity|null first()
 * @method AclRoleEntity|null last()
 */
class AclRoleCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return AclRoleEntity::class;
    }
}
