<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\UserConfig;

use Vin\ShopwareSdk\Data\Entity\v0000\User\UserEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class UserConfigEntity extends Entity
{
    public ?string $userId = null;

    public ?string $key = null;

    public ?array $value = null;

    public ?UserEntity $user = null;
}
