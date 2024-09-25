<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ImportExportProfileTranslation;

use Vin\ShopwareSdk\Data\Entity\ImportExportProfile\ImportExportProfileEntity;
use Vin\ShopwareSdk\Data\Entity\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class ImportExportProfileTranslationEntity extends Entity
{
    public ?string $label = null;

    public ?string $importExportProfileId = null;

    public ?string $languageId = null;

    public ?ImportExportProfileEntity $importExportProfile = null;

    public ?LanguageEntity $language = null;
}
