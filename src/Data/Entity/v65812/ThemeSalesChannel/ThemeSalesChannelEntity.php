<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v65812\ThemeSalesChannel;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v65812\SalesChannel\SalesChannelEntity;
use Vin\ShopwareSdk\Data\Entity\v65812\Theme\ThemeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ThemeSalesChannelEntity extends Entity
{
    public ?string $salesChannelId = null;

    public ?string $themeId = null;

    public ?ThemeEntity $theme = null;

    public ?SalesChannelEntity $salesChannel = null;
}
