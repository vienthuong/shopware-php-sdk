<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CmsBlock;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CmsBlockDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'cms_block';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CmsBlockEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CmsBlockCollection::class;
    }
}
