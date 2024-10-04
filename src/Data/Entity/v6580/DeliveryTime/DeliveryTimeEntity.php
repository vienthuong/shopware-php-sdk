<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6580\DeliveryTime;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6580\DeliveryTimeTranslation\DeliveryTimeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6580\Product\ProductCollection;
use Vin\ShopwareSdk\Data\Entity\v6580\ShippingMethod\ShippingMethodCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class DeliveryTimeEntity extends Entity
{
    public ?string $name = null;

    public ?int $min = null;

    public ?int $max = null;

    public ?string $unit = null;

    public ?ShippingMethodCollection $shippingMethods = null;

    public ?ProductCollection $products = null;

    public ?DeliveryTimeTranslationCollection $translations = null;
}