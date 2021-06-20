<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CustomerWishlist;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerWishlistDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'customer_wishlist';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CustomerWishlistEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CustomerWishlistCollection::class;
    }
}
