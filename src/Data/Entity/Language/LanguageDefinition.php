<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Language;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class LanguageDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'language';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return LanguageEntity::class;
    }

    public function getEntityCollection() : string
    {
        return LanguageCollection::class;
    }
}
