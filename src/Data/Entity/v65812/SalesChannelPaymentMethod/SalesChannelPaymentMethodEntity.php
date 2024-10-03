<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v65812\SalesChannelPaymentMethod;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v65812\PaymentMethod\PaymentMethodEntity;
use Vin\ShopwareSdk\Data\Entity\v65812\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelPaymentMethodEntity extends Entity
{
    public ?string $salesChannelId = null;

    public ?string $paymentMethodId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?PaymentMethodEntity $paymentMethod = null;
}
