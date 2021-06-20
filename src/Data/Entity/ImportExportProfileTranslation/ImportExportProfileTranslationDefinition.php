<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ImportExportProfileTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ImportExportProfileTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'import_export_profile_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ImportExportProfileTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ImportExportProfileTranslationCollection::class;
    }
}
