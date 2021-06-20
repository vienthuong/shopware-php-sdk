<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Tag;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class TagDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'tag';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return TagEntity::class;
    }

    public function getEntityCollection() : string
    {
        return TagCollection::class;
    }
}
