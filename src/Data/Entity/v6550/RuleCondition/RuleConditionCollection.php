<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6550\RuleCondition;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                     add(RuleConditionEntity $entity)
 * @method void                     set(RuleConditionEntity $entity)
 * @method RuleConditionEntity[]    getIterator()
 * @method RuleConditionEntity[]    getElements()
 * @method RuleConditionEntity|null get(string $key)
 * @method RuleConditionEntity|null first()
 * @method RuleConditionEntity|null last()
 */
class RuleConditionCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return RuleConditionEntity::class;
    }
}
