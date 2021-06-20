<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Promotion;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'promotion';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return PromotionEntity::class;
    }

    public function getEntityCollection() : string
    {
        return PromotionCollection::class;
    }
}
