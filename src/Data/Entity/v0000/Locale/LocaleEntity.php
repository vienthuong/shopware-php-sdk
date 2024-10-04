<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\Locale;

use Vin\ShopwareSdk\Data\Entity\v0000\Language\LanguageCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\LocaleTranslation\LocaleTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\User\UserCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class LocaleEntity extends Entity
{
    public ?string $code = null;

    public ?string $name = null;

    public ?string $territory = null;

    public ?LanguageCollection $languages = null;

    public ?LocaleTranslationCollection $translations = null;

    public ?UserCollection $users = null;
}
