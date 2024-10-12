<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6660\Flow;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void            add(FlowEntity $entity)
 * @method void            set(FlowEntity $entity)
 * @method FlowEntity[]    getIterator()
 * @method FlowEntity[]    getElements()
 * @method FlowEntity|null get(string $key)
 * @method FlowEntity|null first()
 * @method FlowEntity|null last()
 */
class FlowCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return FlowEntity::class;
    }
}
