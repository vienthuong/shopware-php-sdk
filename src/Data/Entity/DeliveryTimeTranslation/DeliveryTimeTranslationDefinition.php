<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\DeliveryTimeTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class DeliveryTimeTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'delivery_time_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return DeliveryTimeTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return DeliveryTimeTranslationCollection::class;
    }
}
