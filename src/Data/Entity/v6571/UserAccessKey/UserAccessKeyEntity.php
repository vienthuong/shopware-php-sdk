<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6571\UserAccessKey;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6571\User\UserEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class UserAccessKeyEntity extends Entity
{
    public ?string $userId = null;

    public ?string $accessKey = null;

    public ?string $secretAccessKey = null;

    public ?\DateTimeInterface $lastUsageAt = null;

    public ?UserEntity $user = null;
}
