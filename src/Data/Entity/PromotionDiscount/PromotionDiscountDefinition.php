<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\PromotionDiscount;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionDiscountDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'promotion_discount';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return PromotionDiscountEntity::class;
    }

    public function getEntityCollection() : string
    {
        return PromotionDiscountCollection::class;
    }
}
