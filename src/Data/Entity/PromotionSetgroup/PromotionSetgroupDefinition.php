<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\PromotionSetgroup;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionSetgroupDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'promotion_setgroup';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return PromotionSetgroupEntity::class;
    }

    public function getEntityCollection() : string
    {
        return PromotionSetgroupCollection::class;
    }
}
