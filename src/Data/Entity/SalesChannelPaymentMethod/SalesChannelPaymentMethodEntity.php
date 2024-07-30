<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SalesChannelPaymentMethod;

use Vin\ShopwareSdk\Data\Entity\SalesChannel\SalesChannelEntity;
use Vin\ShopwareSdk\Data\Entity\PaymentMethod\PaymentMethodEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class SalesChannelPaymentMethodEntity extends Entity
{
    public ?string $salesChannelId = null;

    public ?string $paymentMethodId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?PaymentMethodEntity $paymentMethod = null;
}
