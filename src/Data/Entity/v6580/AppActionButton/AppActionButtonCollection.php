<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6580\AppActionButton;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                       add(AppActionButtonEntity $entity)
 * @method void                       set(AppActionButtonEntity $entity)
 * @method AppActionButtonEntity[]    getIterator()
 * @method AppActionButtonEntity[]    getElements()
 * @method AppActionButtonEntity|null get(string $key)
 * @method AppActionButtonEntity|null first()
 * @method AppActionButtonEntity|null last()
 */
class AppActionButtonCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return AppActionButtonEntity::class;
    }
}
