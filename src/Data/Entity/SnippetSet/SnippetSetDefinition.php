<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SnippetSet;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SnippetSetDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'snippet_set';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return SnippetSetEntity::class;
    }

    public function getEntityCollection() : string
    {
        return SnippetSetCollection::class;
    }
}
