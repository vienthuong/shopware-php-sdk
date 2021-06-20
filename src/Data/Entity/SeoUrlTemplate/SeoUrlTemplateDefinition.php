<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SeoUrlTemplate;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SeoUrlTemplateDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'seo_url_template';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return SeoUrlTemplateEntity::class;
    }

    public function getEntityCollection() : string
    {
        return SeoUrlTemplateCollection::class;
    }
}
