<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CmsPage;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CmsPageDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'cms_page';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CmsPageEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CmsPageCollection::class;
    }
}
