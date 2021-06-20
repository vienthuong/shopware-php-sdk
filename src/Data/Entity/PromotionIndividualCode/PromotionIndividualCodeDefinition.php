<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\PromotionIndividualCode;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionIndividualCodeDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'promotion_individual_code';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return PromotionIndividualCodeEntity::class;
    }

    public function getEntityCollection() : string
    {
        return PromotionIndividualCodeCollection::class;
    }
}
