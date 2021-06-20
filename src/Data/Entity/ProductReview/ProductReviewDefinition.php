<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductReview;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductReviewDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'product_review';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return ProductReviewEntity::class;
    }

    public function getEntityCollection() : string
    {
        return ProductReviewCollection::class;
    }
}
