<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\Script;

use Vin\ShopwareSdk\Data\Entity\App\AppEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class ScriptEntity extends Entity
{
    public ?string $script = null;

    public ?string $hook = null;

    public ?string $name = null;

    public ?bool $active = null;

    public ?string $appId = null;

    public ?AppEntity $app = null;
}
