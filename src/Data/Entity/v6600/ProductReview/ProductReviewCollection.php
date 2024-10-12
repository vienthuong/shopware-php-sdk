<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\ProductReview;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                     add(ProductReviewEntity $entity)
 * @method void                     set(ProductReviewEntity $entity)
 * @method ProductReviewEntity[]    getIterator()
 * @method ProductReviewEntity[]    getElements()
 * @method ProductReviewEntity|null get(string $key)
 * @method ProductReviewEntity|null first()
 * @method ProductReviewEntity|null last()
 */
class ProductReviewCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return ProductReviewEntity::class;
    }
}
