<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ImportExportProfile;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ImportExportProfileDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'import_export_profile';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ImportExportProfileEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ImportExportProfileCollection::class;
    }
}
