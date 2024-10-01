<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\Unit;

use Vin\ShopwareSdk\Data\Entity\Product\ProductCollection;
use Vin\ShopwareSdk\Data\Entity\UnitTranslation\UnitTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class UnitEntity extends Entity
{
    public ?string $shortCode = null;

    public ?string $name = null;

    public ?ProductCollection $products = null;

    public ?UnitTranslationCollection $translations = null;
}
