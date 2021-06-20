<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Snippet;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SnippetDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'snippet';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return SnippetEntity::class;
    }

    public function getEntityCollection() : string
    {
        return SnippetCollection::class;
    }
}
