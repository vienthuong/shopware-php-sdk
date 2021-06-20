<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ShippingMethodTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ShippingMethodTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'shipping_method_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ShippingMethodTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ShippingMethodTranslationCollection::class;
    }
}
