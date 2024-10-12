<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\CustomFieldSet;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                      add(CustomFieldSetEntity $entity)
 * @method void                      set(CustomFieldSetEntity $entity)
 * @method CustomFieldSetEntity[]    getIterator()
 * @method CustomFieldSetEntity[]    getElements()
 * @method CustomFieldSetEntity|null get(string $key)
 * @method CustomFieldSetEntity|null first()
 * @method CustomFieldSetEntity|null last()
 */
class CustomFieldSetCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return CustomFieldSetEntity::class;
    }
}
