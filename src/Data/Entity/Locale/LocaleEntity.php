<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\Locale;

use Vin\ShopwareSdk\Data\Entity\Language\LanguageCollection;
use Vin\ShopwareSdk\Data\Entity\LocaleTranslation\LocaleTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\User\UserCollection;
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
