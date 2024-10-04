<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6560\SystemConfig;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6560\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SystemConfigEntity extends Entity
{
    public ?string $configurationKey = null;

    public ?array $configurationValue = null;

    public ?string $salesChannelId = null;

    public ?SalesChannelEntity $salesChannel = null;
}
