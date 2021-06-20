<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\LocaleTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class LocaleTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'locale_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return LocaleTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return LocaleTranslationCollection::class;
    }
}
