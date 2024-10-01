<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\AppPaymentMethod;

use Vin\ShopwareSdk\Data\Entity\App\AppEntity;
use Vin\ShopwareSdk\Data\Entity\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\PaymentMethod\PaymentMethodEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class AppPaymentMethodEntity extends Entity
{
    public ?string $appName = null;

    public ?string $identifier = null;

    public ?string $payUrl = null;

    public ?string $finalizeUrl = null;

    public ?string $validateUrl = null;

    public ?string $captureUrl = null;

    public ?string $refundUrl = null;

    public ?string $appId = null;

    public ?AppEntity $app = null;

    public ?string $originalMediaId = null;

    public ?MediaEntity $originalMedia = null;

    public ?string $paymentMethodId = null;

    public ?PaymentMethodEntity $paymentMethod = null;
}
