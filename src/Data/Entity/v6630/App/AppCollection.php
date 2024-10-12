<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\App;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void           add(AppEntity $entity)
 * @method void           set(AppEntity $entity)
 * @method AppEntity[]    getIterator()
 * @method AppEntity[]    getElements()
 * @method AppEntity|null get(string $key)
 * @method AppEntity|null first()
 * @method AppEntity|null last()
 */
class AppCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return AppEntity::class;
    }
}
