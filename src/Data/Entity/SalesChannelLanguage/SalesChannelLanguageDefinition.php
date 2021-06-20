<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SalesChannelLanguage;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelLanguageDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'sales_channel_language';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return SalesChannelLanguageEntity::class;
    }

    public function getEntityCollection() : string
    {
        return SalesChannelLanguageCollection::class;
    }
}
