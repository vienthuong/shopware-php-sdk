<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6583\ShippingMethodPrice;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6583\Rule\RuleEntity;
use Vin\ShopwareSdk\Data\Entity\v6583\ShippingMethod\ShippingMethodEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ShippingMethodPriceEntity extends Entity
{
    public ?string $shippingMethodId = null;

    public ?string $ruleId = null;

    public ?int $calculation = null;

    public ?string $calculationRuleId = null;

    public ?float $quantityStart = null;

    public ?float $quantityEnd = null;

    public ?array $currencyPrice = null;

    public ?ShippingMethodEntity $shippingMethod = null;

    public ?RuleEntity $rule = null;

    public ?RuleEntity $calculationRule = null;
}
