<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\UserRecovery;

use Vin\ShopwareSdk\Data\Entity\v0000\User\UserEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class UserRecoveryEntity extends Entity
{
    public ?string $hash = null;

    public ?string $userId = null;

    public ?UserEntity $user = null;
}
