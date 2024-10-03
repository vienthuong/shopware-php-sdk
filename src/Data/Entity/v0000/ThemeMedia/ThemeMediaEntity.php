<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\ThemeMedia;

use Vin\ShopwareSdk\Data\Entity\v0000\Theme\ThemeEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class ThemeMediaEntity extends Entity
{
    public ?string $themeId = null;

    public ?string $mediaId = null;

    public ?ThemeEntity $theme = null;

    public ?MediaEntity $media = null;
}
