<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SalesChannelTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelTranslationCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return SalesChannelTranslationEntity::class;
    }
}
