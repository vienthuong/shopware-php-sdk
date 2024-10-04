<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v65812\AclUserRole;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v65812\AclRole\AclRoleEntity;
use Vin\ShopwareSdk\Data\Entity\v65812\User\UserEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class AclUserRoleEntity extends Entity
{
    public ?string $userId = null;

    public ?string $aclRoleId = null;

    public ?UserEntity $user = null;

    public ?AclRoleEntity $aclRole = null;
}
