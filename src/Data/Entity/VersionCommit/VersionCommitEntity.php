<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\VersionCommit;

use Vin\ShopwareSdk\Data\Entity\VersionCommitData\VersionCommitDataCollection;
use Vin\ShopwareSdk\Data\Entity\Version\VersionEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class VersionCommitEntity extends Entity
{
    public ?string $userId = null;

    public ?string $integrationId = null;

    public ?int $autoIncrement = null;

    public ?bool $isMerge = null;

    public ?string $message = null;

    public ?VersionCommitDataCollection $data = null;

    public ?VersionEntity $version = null;
}
