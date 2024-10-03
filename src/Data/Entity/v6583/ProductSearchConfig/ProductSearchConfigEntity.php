<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6583\ProductSearchConfig;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6583\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6583\ProductSearchConfigField\ProductSearchConfigFieldCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductSearchConfigEntity extends Entity
{
    public ?string $languageId = null;

    public ?bool $andLogic = null;

    public ?int $minSearchLength = null;

    public ?array $excludedTerms = null;

    public ?LanguageEntity $language = null;

    public ?ProductSearchConfigFieldCollection $configFields = null;
}
