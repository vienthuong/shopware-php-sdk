<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\DocumentType;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class DocumentTypeDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'document_type';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return DocumentTypeEntity::class;
    }

    public function getEntityCollection() : string
    {
        return DocumentTypeCollection::class;
    }
}
