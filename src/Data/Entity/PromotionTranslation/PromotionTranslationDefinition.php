<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\PromotionTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'promotion_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return PromotionTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return PromotionTranslationCollection::class;
    }
}
