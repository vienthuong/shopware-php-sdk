<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SeoUrl;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SeoUrlDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'seo_url';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return SeoUrlEntity::class;
    }

    public function getEntityCollection() : string
    {
        return SeoUrlCollection::class;
    }
}
