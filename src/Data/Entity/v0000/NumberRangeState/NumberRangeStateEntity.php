<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\NumberRangeState;

use Vin\ShopwareSdk\Data\Entity\v0000\NumberRange\NumberRangeEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class NumberRangeStateEntity extends Entity
{
    public ?string $numberRangeId = null;

    public ?int $lastValue = null;

    public ?NumberRangeEntity $numberRange = null;
}
