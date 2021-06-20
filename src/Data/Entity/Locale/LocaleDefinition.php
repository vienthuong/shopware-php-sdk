<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Locale;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class LocaleDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'locale';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return LocaleEntity::class;
    }

    public function getEntityCollection() : string
    {
        return LocaleCollection::class;
    }
}
