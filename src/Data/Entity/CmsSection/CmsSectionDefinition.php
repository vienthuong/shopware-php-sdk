<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CmsSection;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CmsSectionDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'cms_section';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CmsSectionEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CmsSectionCollection::class;
    }
}
