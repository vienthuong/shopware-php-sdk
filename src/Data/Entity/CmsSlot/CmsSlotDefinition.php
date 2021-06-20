<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CmsSlot;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CmsSlotDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'cms_slot';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CmsSlotEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CmsSlotCollection::class;
    }
}
