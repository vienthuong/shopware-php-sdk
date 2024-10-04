<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6583\PromotionPersonaCustomer;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                                add(PromotionPersonaCustomerEntity $entity)
 * @method void                                set(PromotionPersonaCustomerEntity $entity)
 * @method PromotionPersonaCustomerEntity[]    getIterator()
 * @method PromotionPersonaCustomerEntity[]    getElements()
 * @method PromotionPersonaCustomerEntity|null get(string $key)
 * @method PromotionPersonaCustomerEntity|null first()
 * @method PromotionPersonaCustomerEntity|null last()
 */
class PromotionPersonaCustomerCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return PromotionPersonaCustomerEntity::class;
    }
}
