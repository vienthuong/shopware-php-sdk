<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\NumberRangeType;

use Vin\ShopwareSdk\Data\Entity\NumberRange\NumberRangeCollection;
use Vin\ShopwareSdk\Data\Entity\NumberRangeSalesChannel\NumberRangeSalesChannelCollection;
use Vin\ShopwareSdk\Data\Entity\NumberRangeTypeTranslation\NumberRangeTypeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class NumberRangeTypeEntity extends Entity
{
    public ?string $technicalName = null;

    public ?string $typeName = null;

    public ?bool $global = null;

    public ?NumberRangeCollection $numberRanges = null;

    public ?NumberRangeSalesChannelCollection $numberRangeSalesChannels = null;

    public ?NumberRangeTypeTranslationCollection $translations = null;
}
