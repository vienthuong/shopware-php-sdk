<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6660\SalesChannelShippingMethod;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6660\SalesChannel\SalesChannelEntity;
use Vin\ShopwareSdk\Data\Entity\v6660\ShippingMethod\ShippingMethodEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelShippingMethodEntity extends Entity
{
    public ?string $salesChannelId = null;
    public ?string $shippingMethodId = null;
    public ?SalesChannelEntity $salesChannel = null;
    public ?ShippingMethodEntity $shippingMethod = null;
}
