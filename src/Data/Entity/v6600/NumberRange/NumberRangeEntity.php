<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\NumberRange;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6600\NumberRangeSalesChannel\NumberRangeSalesChannelCollection;
use Vin\ShopwareSdk\Data\Entity\v6600\NumberRangeState\NumberRangeStateEntity;
use Vin\ShopwareSdk\Data\Entity\v6600\NumberRangeTranslation\NumberRangeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6600\NumberRangeType\NumberRangeTypeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class NumberRangeEntity extends Entity
{
    public ?string $typeId = null;
    public ?bool $global = null;
    public ?string $name = null;
    public ?string $description = null;
    public ?string $pattern = null;
    public ?int $start = null;
    public ?NumberRangeTypeEntity $type = null;
    public ?NumberRangeSalesChannelCollection $numberRangeSalesChannels = null;
    public ?NumberRangeStateEntity $state = null;
    public ?NumberRangeTranslationCollection $translations = null;
}
