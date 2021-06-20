<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\PromotionSalesChannel;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionSalesChannelDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'promotion_sales_channel';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return PromotionSalesChannelEntity::class;
    }

    public function getEntityCollection() : string
    {
        return PromotionSalesChannelCollection::class;
    }
}
