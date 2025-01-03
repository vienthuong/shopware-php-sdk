<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\AppShippingMethod;

use Vin\ShopwareSdk\Data\Entity\App\AppEntity;
use Vin\ShopwareSdk\Data\Entity\ShippingMethod\ShippingMethodEntity;
use Vin\ShopwareSdk\Data\Entity\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
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
