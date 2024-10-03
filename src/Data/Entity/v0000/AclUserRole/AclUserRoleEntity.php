<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\AclUserRole;

use Vin\ShopwareSdk\Data\Entity\v0000\User\UserEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\AclRole\AclRoleEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class AclUserRoleEntity extends Entity
{
    public ?string $userId = null;

    public ?string $aclRoleId = null;

    public ?UserEntity $user = null;

    public ?AclRoleEntity $aclRole = null;
}
