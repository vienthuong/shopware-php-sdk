<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SalesChannelTypeTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelTypeTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'sales_channel_type_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return SalesChannelTypeTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return SalesChannelTypeTranslationCollection::class;
    }
}
