<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\ThemeMedia;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6640\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\Theme\ThemeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ThemeMediaEntity extends Entity
{
    public ?string $themeId = null;
    public ?string $mediaId = null;
    public ?ThemeEntity $theme = null;
    public ?MediaEntity $media = null;
}
