<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Document;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class DocumentDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'document';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return DocumentEntity::class;
    }

    public function getEntityCollection() : string
    {
        return DocumentCollection::class;
    }
}
