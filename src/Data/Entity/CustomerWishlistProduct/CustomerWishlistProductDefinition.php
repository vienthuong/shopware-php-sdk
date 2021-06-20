<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CustomerWishlistProduct;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerWishlistProductDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'customer_wishlist_product';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CustomerWishlistProductEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CustomerWishlistProductCollection::class;
    }
}
