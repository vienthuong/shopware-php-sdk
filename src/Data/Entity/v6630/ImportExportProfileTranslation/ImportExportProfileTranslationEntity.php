<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\ImportExportProfileTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6630\ImportExportProfile\ImportExportProfileEntity;
use Vin\ShopwareSdk\Data\Entity\v6630\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ImportExportProfileTranslationEntity extends Entity
{
    public ?string $label = null;
    public ?string $importExportProfileId = null;
    public ?string $languageId = null;
    public ?ImportExportProfileEntity $importExportProfile = null;
    public ?LanguageEntity $language = null;
}
