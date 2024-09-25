<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\NumberRange;

use Vin\ShopwareSdk\Data\Entity\NumberRangeType\NumberRangeTypeEntity;
use Vin\ShopwareSdk\Data\Entity\NumberRangeSalesChannel\NumberRangeSalesChannelCollection;
use Vin\ShopwareSdk\Data\Entity\NumberRangeState\NumberRangeStateEntity;
use Vin\ShopwareSdk\Data\Entity\NumberRangeTranslation\NumberRangeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
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
