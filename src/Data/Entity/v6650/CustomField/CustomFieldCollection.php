<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\CustomField;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                   add(CustomFieldEntity $entity)
 * @method void                   set(CustomFieldEntity $entity)
 * @method CustomFieldEntity[]    getIterator()
 * @method CustomFieldEntity[]    getElements()
 * @method CustomFieldEntity|null get(string $key)
 * @method CustomFieldEntity|null first()
 * @method CustomFieldEntity|null last()
 */
class CustomFieldCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return CustomFieldEntity::class;
    }
}
