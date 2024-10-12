<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\ImportExportProfile;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6640\ImportExportLog\ImportExportLogCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\ImportExportProfileTranslation\ImportExportProfileTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ImportExportProfileEntity extends Entity
{
    public ?string $label = null;
    public ?string $type = null;
    public ?bool $systemDefault = null;
    public ?string $sourceEntity = null;
    public ?string $fileType = null;
    public ?string $delimiter = null;
    public ?string $enclosure = null;
    public ?array $mapping = null;
    public ?array $updateBy = null;
    public ?array $config = null;
    public ?ImportExportLogCollection $importExportLogs = null;
    public ?ImportExportProfileTranslationCollection $translations = null;
    public ?string $technicalName = null;
    public ?string $name = null;
}
