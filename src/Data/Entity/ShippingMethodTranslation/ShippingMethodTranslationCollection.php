<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ShippingMethodTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ShippingMethodTranslationCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return ShippingMethodTranslationEntity::class;
    }
}
