<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6571\PromotionDiscount;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                         add(PromotionDiscountEntity $entity)
 * @method void                         set(PromotionDiscountEntity $entity)
 * @method PromotionDiscountEntity[]    getIterator()
 * @method PromotionDiscountEntity[]    getElements()
 * @method PromotionDiscountEntity|null get(string $key)
 * @method PromotionDiscountEntity|null first()
 * @method PromotionDiscountEntity|null last()
 */
class PromotionDiscountCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return PromotionDiscountEntity::class;
    }
}
