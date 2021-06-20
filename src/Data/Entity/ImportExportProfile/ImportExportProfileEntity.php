<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ImportExportProfile;

use Vin\ShopwareSdk\Data\Entity\ImportExportLog\ImportExportLogCollection;
use Vin\ShopwareSdk\Data\Entity\ImportExportProfileTranslation\ImportExportProfileTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ImportExportProfileEntity extends Entity
{
    public ?string $name = null;

    public ?string $label = null;

    public ?bool $systemDefault = null;

    public ?string $sourceEntity = null;

    public ?string $fileType = null;

    public ?string $delimiter = null;

    public ?string $enclosure = null;

    public ?array $mapping = null;

    public ?array $config = null;

    public ?ImportExportLogCollection $importExportLogs = null;

    public ?ImportExportProfileTranslationCollection $translations = null;
}
