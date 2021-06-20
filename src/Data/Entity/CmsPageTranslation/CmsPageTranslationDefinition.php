<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CmsPageTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CmsPageTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'cms_page_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CmsPageTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CmsPageTranslationCollection::class;
    }
}
