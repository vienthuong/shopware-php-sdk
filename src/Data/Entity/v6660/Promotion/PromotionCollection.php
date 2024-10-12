<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6660\Promotion;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                 add(PromotionEntity $entity)
 * @method void                 set(PromotionEntity $entity)
 * @method PromotionEntity[]    getIterator()
 * @method PromotionEntity[]    getElements()
 * @method PromotionEntity|null get(string $key)
 * @method PromotionEntity|null first()
 * @method PromotionEntity|null last()
 */
class PromotionCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return PromotionEntity::class;
    }
}
