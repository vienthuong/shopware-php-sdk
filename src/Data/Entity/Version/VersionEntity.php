<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\Version;

use Vin\ShopwareSdk\Data\Entity\VersionCommit\VersionCommitCollection;
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
