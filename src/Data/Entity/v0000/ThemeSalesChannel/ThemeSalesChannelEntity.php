<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\ThemeSalesChannel;

use Vin\ShopwareSdk\Data\Entity\v0000\Theme\ThemeEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\SalesChannel\SalesChannelEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class ThemeSalesChannelEntity extends Entity
{
    public ?string $salesChannelId = null;

    public ?string $themeId = null;

    public ?ThemeEntity $theme = null;

    public ?SalesChannelEntity $salesChannel = null;
}
