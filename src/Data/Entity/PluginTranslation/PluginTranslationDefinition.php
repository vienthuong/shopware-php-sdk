<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\PluginTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PluginTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'plugin_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return PluginTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return PluginTranslationCollection::class;
    }
}
