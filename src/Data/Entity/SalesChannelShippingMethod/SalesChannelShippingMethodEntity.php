<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SalesChannelShippingMethod;

use Vin\ShopwareSdk\Data\Entity\SalesChannel\SalesChannelEntity;
use Vin\ShopwareSdk\Data\Entity\ShippingMethod\ShippingMethodEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
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
