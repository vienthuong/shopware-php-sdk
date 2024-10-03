<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\Version;

use Vin\ShopwareSdk\Data\Entity\v0000\VersionCommit\VersionCommitCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class VersionEntity extends Entity
{
    public ?string $name = null;

    public ?VersionCommitCollection $commits = null;
}
