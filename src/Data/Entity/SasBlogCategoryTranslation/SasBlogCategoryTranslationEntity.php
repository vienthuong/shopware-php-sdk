<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SasBlogCategoryTranslation;

use Vin\ShopwareSdk\Data\Entity\SasBlogCategory\SasBlogCategoryEntity;
use Vin\ShopwareSdk\Data\Entity\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SasBlogCategoryTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $sasBlogCategoryId = null;

    public ?string $languageId = null;

    public ?SasBlogCategoryEntity $sasBlogCategory = null;

    public ?LanguageEntity $language = null;

    public ?string $sasBlogCategoryVersionId = null;
}
