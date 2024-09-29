<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\ThemeMedia;

use Vin\ShopwareSdk\Data\Entity\Theme\ThemeEntity;
use Vin\ShopwareSdk\Data\Entity\Media\MediaEntity;
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
