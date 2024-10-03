<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\DocumentTypeTranslation;

use Vin\ShopwareSdk\Data\Entity\v0000\DocumentType\DocumentTypeEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class DocumentTypeTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $documentTypeId = null;

    public ?string $languageId = null;

    public ?DocumentTypeEntity $documentType = null;

    public ?LanguageEntity $language = null;
}
