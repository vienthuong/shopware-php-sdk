<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\SalesChannelAnalytics;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6600\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelAnalyticsEntity extends Entity
{
    public ?string $trackingId = null;
    public ?bool $active = null;
    public ?bool $trackOrders = null;
    public ?bool $anonymizeIp = null;
    public ?SalesChannelEntity $salesChannel = null;
}
