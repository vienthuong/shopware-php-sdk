<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\Script;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6650\App\AppEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ScriptEntity extends Entity
{
    public ?string $script = null;
    public ?string $hook = null;
    public ?string $name = null;
    public ?bool $active = null;
    public ?string $appId = null;
    public ?AppEntity $app = null;
}
