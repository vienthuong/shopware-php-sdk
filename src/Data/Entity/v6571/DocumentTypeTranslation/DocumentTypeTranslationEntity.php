<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6571\DocumentTypeTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6571\DocumentType\DocumentTypeEntity;
use Vin\ShopwareSdk\Data\Entity\v6571\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class DocumentTypeTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $documentTypeId = null;

    public ?string $languageId = null;

    public ?DocumentTypeEntity $documentType = null;

    public ?LanguageEntity $language = null;
}
