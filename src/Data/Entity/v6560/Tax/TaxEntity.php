<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6560\Tax;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6560\Product\ProductCollection;
use Vin\ShopwareSdk\Data\Entity\v6560\ShippingMethod\ShippingMethodCollection;
use Vin\ShopwareSdk\Data\Entity\v6560\TaxRule\TaxRuleCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class TaxEntity extends Entity
{
    public ?float $taxRate = null;

    public ?string $name = null;

    public ?int $position = null;

    public ?ProductCollection $products = null;

    public ?TaxRuleCollection $rules = null;

    public ?ShippingMethodCollection $shippingMethods = null;
}