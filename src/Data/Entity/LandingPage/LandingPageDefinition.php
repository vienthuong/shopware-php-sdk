<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\LandingPage;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class LandingPageDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'landing_page';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return LandingPageEntity::class;
    }

    public function getEntityCollection() : string
    {
        return LandingPageCollection::class;
    }
}
