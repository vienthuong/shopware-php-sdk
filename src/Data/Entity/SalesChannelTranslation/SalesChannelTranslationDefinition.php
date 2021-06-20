<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SalesChannelTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'sales_channel_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return SalesChannelTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return SalesChannelTranslationCollection::class;
    }
}
