<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductSearchConfig;

use Vin\ShopwareSdk\Data\Entity\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\ProductSearchConfigField\ProductSearchConfigFieldCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class ProductSearchConfigEntity extends Entity
{
    public ?string $languageId = null;

    public ?bool $andLogic = null;

    public ?int $minSearchLength = null;

    public ?array $excludedTerms = null;

    public ?LanguageEntity $language = null;

    public ?ProductSearchConfigFieldCollection $configFields = null;
}
