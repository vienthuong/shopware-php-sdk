<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Notification;

use Vin\ShopwareSdk\Data\Entity\Integration\IntegrationEntity;
use Vin\ShopwareSdk\Data\Entity\User\UserEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class NotificationEntity extends Entity
{
    public ?string $status = null;

    public ?string $message = null;

    public ?bool $adminOnly = null;

    public ?array $requiredPrivileges = null;

    public ?string $createdByIntegrationId = null;

    public ?string $createdByUserId = null;

    public ?IntegrationEntity $createdByIntegration = null;

    public ?UserEntity $createdByUser = null;
}
