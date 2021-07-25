<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SasBlogAuthorTranslation;

use Vin\ShopwareSdk\Data\Entity\SasBlogAuthor\SasBlogAuthorEntity;
use Vin\ShopwareSdk\Data\Entity\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SasBlogAuthorTranslationEntity extends Entity
{
    public ?string $description = null;

    public ?string $sasBlogAuthorId = null;

    public ?string $languageId = null;

    public ?SasBlogAuthorEntity $sasBlogAuthor = null;

    public ?LanguageEntity $language = null;
}
