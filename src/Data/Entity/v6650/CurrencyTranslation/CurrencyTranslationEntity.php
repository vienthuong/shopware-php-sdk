<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\CurrencyTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6650\Currency\CurrencyEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CurrencyTranslationEntity extends Entity
{
    public ?string $shortName = null;
    public ?string $name = null;
    public ?string $currencyId = null;
    public ?string $languageId = null;
    public ?CurrencyEntity $currency = null;
    public ?LanguageEntity $language = null;
}
