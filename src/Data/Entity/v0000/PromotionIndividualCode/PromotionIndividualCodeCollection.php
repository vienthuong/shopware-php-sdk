<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\PromotionIndividualCode;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(PromotionIndividualCodeEntity $entity)
 * @method void set(PromotionIndividualCodeEntity $entity)
 * @method PromotionIndividualCodeEntity[] getIterator()
 * @method PromotionIndividualCodeEntity[] getElements()
 * @method PromotionIndividualCodeEntity|null get(string $key)
 * @method PromotionIndividualCodeEntity|null first()
 * @method PromotionIndividualCodeEntity|null last()
 */
class PromotionIndividualCodeCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return PromotionIndividualCodeEntity::class;
    }
}
