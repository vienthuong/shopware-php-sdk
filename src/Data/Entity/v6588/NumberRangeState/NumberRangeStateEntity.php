<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6588\NumberRangeState;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6588\NumberRange\NumberRangeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class NumberRangeStateEntity extends Entity
{
    public ?string $numberRangeId = null;

    public ?int $lastValue = null;

    public ?NumberRangeEntity $numberRange = null;
}
