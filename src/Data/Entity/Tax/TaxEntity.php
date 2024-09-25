<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Tax;

use Vin\ShopwareSdk\Data\Entity\Product\ProductCollection;
use Vin\ShopwareSdk\Data\Entity\TaxRule\TaxRuleCollection;
use Vin\ShopwareSdk\Data\Entity\ShippingMethod\ShippingMethodCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class TaxEntity extends Entity
{
    public ?float $taxRate = null;

    public ?string $name = null;

    public ?int $position = null;

    public ?ProductCollection $products = null;

    public ?TaxRuleCollection $rules = null;

    public ?ShippingMethodCollection $shippingMethods = null;
}
