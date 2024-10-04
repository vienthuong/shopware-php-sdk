<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6588\ShippingMethodTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                                 add(ShippingMethodTranslationEntity $entity)
 * @method void                                 set(ShippingMethodTranslationEntity $entity)
 * @method ShippingMethodTranslationEntity[]    getIterator()
 * @method ShippingMethodTranslationEntity[]    getElements()
 * @method ShippingMethodTranslationEntity|null get(string $key)
 * @method ShippingMethodTranslationEntity|null first()
 * @method ShippingMethodTranslationEntity|null last()
 */
class ShippingMethodTranslationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return ShippingMethodTranslationEntity::class;
    }
}
