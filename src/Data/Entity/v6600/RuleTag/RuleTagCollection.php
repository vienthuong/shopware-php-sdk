<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\RuleTag;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void               add(RuleTagEntity $entity)
 * @method void               set(RuleTagEntity $entity)
 * @method RuleTagEntity[]    getIterator()
 * @method RuleTagEntity[]    getElements()
 * @method RuleTagEntity|null get(string $key)
 * @method RuleTagEntity|null first()
 * @method RuleTagEntity|null last()
 */
class RuleTagCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return RuleTagEntity::class;
    }
}
