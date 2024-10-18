<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Integration;

use Vin\ShopwareSdk\Data\Entity\App\AppEntity;
use Vin\ShopwareSdk\Data\Entity\AclRole\AclRoleCollection;
use Vin\ShopwareSdk\Data\Entity\Notification\NotificationCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class IntegrationEntity extends Entity
{
    public ?string $label = null;

    public ?string $accessKey = null;

    public ?string $secretAccessKey = null;

    public ?\DateTimeInterface$lastUsageAt = null;

    public ?bool $admin = null;

    public ?\DateTimeInterface$deletedAt = null;

    public ?AppEntity $app = null;

    public ?AclRoleCollection $aclRoles = null;

    public ?bool $writeAccess = null;

    public ?NotificationCollection $createdNotifications = null;
}
