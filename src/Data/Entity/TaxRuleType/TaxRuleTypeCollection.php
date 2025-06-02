<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\TaxRuleType;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(TaxRuleTypeEntity $entity)
 * @method void set(string $key, TaxRuleTypeEntity $entity)
 * @method TaxRuleTypeEntity[] getIterator()
 * @method TaxRuleTypeEntity[] getElements()
 * @method TaxRuleTypeEntity|null get(string $key)
 * @method TaxRuleTypeEntity|null first()
 * @method TaxRuleTypeEntity|null last()
 */
class TaxRuleTypeCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return TaxRuleTypeEntity::class;
    }
}
