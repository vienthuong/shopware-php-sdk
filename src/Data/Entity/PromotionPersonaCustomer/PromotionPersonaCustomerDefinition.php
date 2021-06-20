<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\PromotionPersonaCustomer;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionPersonaCustomerDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'promotion_persona_customer';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return PromotionPersonaCustomerEntity::class;
    }

    public function getEntityCollection() : string
    {
        return PromotionPersonaCustomerCollection::class;
    }
}
