<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\PromotionDiscountPrices;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionDiscountPricesDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'promotion_discount_prices';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return PromotionDiscountPricesEntity::class;
    }

    public function getEntityCollection() : string
    {
        return PromotionDiscountPricesCollection::class;
    }
}
