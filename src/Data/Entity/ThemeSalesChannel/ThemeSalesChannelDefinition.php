<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ThemeSalesChannel;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ThemeSalesChannelDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'theme_sales_channel';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ThemeSalesChannelEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ThemeSalesChannelCollection::class;
    }
}
