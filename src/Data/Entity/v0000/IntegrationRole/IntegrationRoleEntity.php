<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\IntegrationRole;

use Vin\ShopwareSdk\Data\Entity\v0000\Integration\IntegrationEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\AclRole\AclRoleEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class IntegrationRoleEntity extends Entity
{
    public ?string $integrationId = null;

    public ?string $aclRoleId = null;

    public ?IntegrationEntity $integration = null;

    public ?AclRoleEntity $role = null;
}
