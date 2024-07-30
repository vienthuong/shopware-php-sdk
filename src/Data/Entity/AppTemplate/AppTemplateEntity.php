<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\AppTemplate;

use Vin\ShopwareSdk\Data\Entity\App\AppEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class AppTemplateEntity extends Entity
{
    public ?string $template = null;

    public ?string $path = null;

    public ?bool $active = null;

    public ?string $appId = null;

    public ?AppEntity $app = null;
}
