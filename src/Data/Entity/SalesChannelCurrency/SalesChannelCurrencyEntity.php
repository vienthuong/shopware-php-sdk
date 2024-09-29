<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\SalesChannelCurrency;

use Vin\ShopwareSdk\Data\Entity\SalesChannel\SalesChannelEntity;
use Vin\ShopwareSdk\Data\Entity\Currency\CurrencyEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class SalesChannelCurrencyEntity extends Entity
{
    public ?string $salesChannelId = null;

    public ?string $currencyId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?CurrencyEntity $currency = null;
}
