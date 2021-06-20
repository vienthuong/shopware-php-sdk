<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ImportExportLog;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ImportExportLogDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'import_export_log';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ImportExportLogEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ImportExportLogCollection::class;
    }
}
