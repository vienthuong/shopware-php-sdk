<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\PluginTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6650\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\Plugin\PluginEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PluginTranslationEntity extends Entity
{
    public ?string $label = null;
    public ?string $description = null;
    public ?string $manufacturerLink = null;
    public ?string $supportLink = null;
    public ?string $pluginId = null;
    public ?string $languageId = null;
    public ?PluginEntity $plugin = null;
    public ?LanguageEntity $language = null;
}
