<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6588\NumberRangeType;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6588\NumberRange\NumberRangeCollection;
use Vin\ShopwareSdk\Data\Entity\v6588\NumberRangeSalesChannel\NumberRangeSalesChannelCollection;
use Vin\ShopwareSdk\Data\Entity\v6588\NumberRangeTypeTranslation\NumberRangeTypeTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class NumberRangeTypeEntity extends Entity
{
    public ?string $technicalName = null;

    public ?string $typeName = null;

    public ?bool $global = null;

    public ?NumberRangeCollection $numberRanges = null;

    public ?NumberRangeSalesChannelCollection $numberRangeSalesChannels = null;

    public ?NumberRangeTypeTranslationCollection $translations = null;
}