<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\PluginTranslation;

use Vin\ShopwareSdk\Data\Entity\v0000\Plugin\PluginEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class PluginTranslationEntity extends Entity
{
    public ?string $label = null;

    public ?string $description = null;

    public ?string $manufacturerLink = null;

    public ?string $supportLink = null;

    public ?array $changelog = null;

    public ?string $pluginId = null;

    public ?string $languageId = null;

    public ?PluginEntity $plugin = null;

    public ?LanguageEntity $language = null;
}
