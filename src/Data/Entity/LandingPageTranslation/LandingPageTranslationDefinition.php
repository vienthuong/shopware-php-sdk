<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\LandingPageTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class LandingPageTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'landing_page_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return LandingPageTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return LandingPageTranslationCollection::class;
    }
}
