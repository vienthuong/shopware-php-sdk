<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CmsSlotTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CmsSlotTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'cms_slot_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CmsSlotTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CmsSlotTranslationCollection::class;
    }
}
