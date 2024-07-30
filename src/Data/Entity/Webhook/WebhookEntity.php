<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Webhook;

use Vin\ShopwareSdk\Data\Entity\App\AppEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class WebhookEntity extends Entity
{
    public ?string $name = null;

    public ?string $eventName = null;

    public ?string $url = null;

    public ?int $errorCount = null;

    public ?bool $active = null;

    public ?string $appId = null;

    public ?AppEntity $app = null;
}
