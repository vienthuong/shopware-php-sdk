<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\NumberRangeSalesChannel;

use Vin\ShopwareSdk\Data\Entity\NumberRange\NumberRangeEntity;
use Vin\ShopwareSdk\Data\Entity\SalesChannel\SalesChannelEntity;
use Vin\ShopwareSdk\Data\Entity\NumberRangeType\NumberRangeTypeEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class NumberRangeSalesChannelEntity extends Entity
{
    public ?string $numberRangeId = null;

    public ?string $salesChannelId = null;

    public ?string $numberRangeTypeId = null;

    public ?NumberRangeEntity $numberRange = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?NumberRangeTypeEntity $numberRangeType = null;
}
