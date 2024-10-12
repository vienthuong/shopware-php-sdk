<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6660\PromotionDiscountPrices;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6660\Currency\CurrencyEntity;
use Vin\ShopwareSdk\Data\Entity\v6660\PromotionDiscount\PromotionDiscountEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionDiscountPricesEntity extends Entity
{
    public ?string $discountId = null;
    public ?string $currencyId = null;
    public ?float $price = null;
    public ?PromotionDiscountEntity $promotionDiscount = null;
    public ?CurrencyEntity $currency = null;
}
