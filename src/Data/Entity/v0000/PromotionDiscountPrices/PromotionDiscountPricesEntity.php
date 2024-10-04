<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\PromotionDiscountPrices;

use Vin\ShopwareSdk\Data\Entity\v0000\PromotionDiscount\PromotionDiscountEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Currency\CurrencyEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class PromotionDiscountPricesEntity extends Entity
{
    public ?string $discountId = null;

    public ?string $currencyId = null;

    public ?float $price = null;

    public ?PromotionDiscountEntity $promotionDiscount = null;

    public ?CurrencyEntity $currency = null;
}
