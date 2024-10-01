<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\SystemConfig;

use Vin\ShopwareSdk\Data\Entity\SalesChannel\SalesChannelEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class SystemConfigEntity extends Entity
{
    public ?string $configurationKey = null;

    public array|bool|float|int|string|null $configurationValue = null;

    public ?string $salesChannelId = null;

    public ?SalesChannelEntity $salesChannel = null;
}
