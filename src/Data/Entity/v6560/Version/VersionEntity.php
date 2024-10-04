<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6560\Version;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6560\VersionCommit\VersionCommitCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class VersionEntity extends Entity
{
    public ?string $name = null;

    public ?VersionCommitCollection $commits = null;
}