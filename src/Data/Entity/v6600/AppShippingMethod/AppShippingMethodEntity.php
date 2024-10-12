<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\AppShippingMethod;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6600\App\AppEntity;
use Vin\ShopwareSdk\Data\Entity\v6600\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\v6600\ShippingMethod\ShippingMethodEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class AppShippingMethodEntity extends Entity
{
    public ?string $appName = null;
    public ?string $identifier = null;
    public ?string $appId = null;
    public ?AppEntity $app = null;
    public ?string $shippingMethodId = null;
    public ?ShippingMethodEntity $shippingMethod = null;
    public ?string $originalMediaId = null;
    public ?MediaEntity $originalMedia = null;
}
