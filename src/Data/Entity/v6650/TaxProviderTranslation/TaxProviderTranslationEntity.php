<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\TaxProviderTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6650\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\TaxProvider\TaxProviderEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class TaxProviderTranslationEntity extends Entity
{
    public ?string $name = null;
    public ?string $taxProviderId = null;
    public ?string $languageId = null;
    public ?TaxProviderEntity $taxProvider = null;
    public ?LanguageEntity $language = null;
}
