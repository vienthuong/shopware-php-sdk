<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\DocumentTypeTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class DocumentTypeTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'document_type_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return DocumentTypeTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return DocumentTypeTranslationCollection::class;
    }
}
