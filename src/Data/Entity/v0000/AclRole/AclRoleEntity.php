<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\AclRole;

use Vin\ShopwareSdk\Data\Entity\v0000\User\UserCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\App\AppEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Integration\IntegrationCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class AclRoleEntity extends Entity
{
    public ?string $name = null;

    public ?string $description = null;

    public ?array $privileges = null;

    public ?\DateTimeInterface $deletedAt = null;

    public ?UserCollection $users = null;

    public ?AppEntity $app = null;

    public ?IntegrationCollection $integrations = null;
}
