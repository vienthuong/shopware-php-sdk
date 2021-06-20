<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\AppTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class AppTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'app_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return AppTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return AppTranslationCollection::class;
    }
}
