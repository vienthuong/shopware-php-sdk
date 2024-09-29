<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\Theme;

use Vin\ShopwareSdk\Data\Entity\ThemeTranslation\ThemeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\SalesChannel\SalesChannelCollection;
use Vin\ShopwareSdk\Data\Entity\Media\MediaCollection;
use Vin\ShopwareSdk\Data\Entity\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class ThemeEntity extends Entity
{
    public ?string $technicalName = null;

    public ?string $name = null;

    public ?string $author = null;

    public ?string $description = null;

    public ?array $labels = null;

    public ?array $helpTexts = null;

    public ?string $previewMediaId = null;

    public ?string $parentThemeId = null;

    public ?array $baseConfig = null;

    public ?array $configValues = null;

    public ?bool $active = null;

    public ?ThemeTranslationCollection $translations = null;

    public ?SalesChannelCollection $salesChannels = null;

    public ?MediaCollection $media = null;

    public ?MediaEntity $previewMedia = null;

    public ?ThemeCollection $dependentThemes = null;
}
