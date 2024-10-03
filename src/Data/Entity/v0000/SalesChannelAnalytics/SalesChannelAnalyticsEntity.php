<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\SalesChannelAnalytics;

use Vin\ShopwareSdk\Data\Entity\v0000\SalesChannel\SalesChannelEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class SalesChannelAnalyticsEntity extends Entity
{
    public ?string $trackingId = null;

    public ?bool $active = null;

    public ?bool $trackOrders = null;

    public ?bool $anonymizeIp = null;

    public ?SalesChannelEntity $salesChannel = null;
}
