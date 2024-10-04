<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6550\SalesChannelCurrency;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6550\Currency\CurrencyEntity;
use Vin\ShopwareSdk\Data\Entity\v6550\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelCurrencyEntity extends Entity
{
    public ?string $salesChannelId = null;

    public ?string $currencyId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?CurrencyEntity $currency = null;
}