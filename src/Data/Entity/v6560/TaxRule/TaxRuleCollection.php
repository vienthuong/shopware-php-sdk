<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6560\TaxRule;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void               add(TaxRuleEntity $entity)
 * @method void               set(TaxRuleEntity $entity)
 * @method TaxRuleEntity[]    getIterator()
 * @method TaxRuleEntity[]    getElements()
 * @method TaxRuleEntity|null get(string $key)
 * @method TaxRuleEntity|null first()
 * @method TaxRuleEntity|null last()
 */
class TaxRuleCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return TaxRuleEntity::class;
    }
}
