<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v65812\IntegrationRole;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v65812\AclRole\AclRoleEntity;
use Vin\ShopwareSdk\Data\Entity\v65812\Integration\IntegrationEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class IntegrationRoleEntity extends Entity
{
    public ?string $integrationId = null;

    public ?string $aclRoleId = null;

    public ?IntegrationEntity $integration = null;

    public ?AclRoleEntity $role = null;
}
