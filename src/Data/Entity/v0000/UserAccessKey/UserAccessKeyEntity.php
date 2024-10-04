<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\UserAccessKey;

use Vin\ShopwareSdk\Data\Entity\v0000\User\UserEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class UserAccessKeyEntity extends Entity
{
    public ?string $userId = null;

    public ?string $accessKey = null;

    public ?string $secretAccessKey = null;

    public ?\DateTimeInterface $lastUsageAt = null;

    public ?UserEntity $user = null;
}
