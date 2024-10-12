<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6660\DeliveryTimeTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                               add(DeliveryTimeTranslationEntity $entity)
 * @method void                               set(DeliveryTimeTranslationEntity $entity)
 * @method DeliveryTimeTranslationEntity[]    getIterator()
 * @method DeliveryTimeTranslationEntity[]    getElements()
 * @method DeliveryTimeTranslationEntity|null get(string $key)
 * @method DeliveryTimeTranslationEntity|null first()
 * @method DeliveryTimeTranslationEntity|null last()
 */
class DeliveryTimeTranslationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return DeliveryTimeTranslationEntity::class;
    }
}
