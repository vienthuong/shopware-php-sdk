<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\CustomFieldSetRelation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(CustomFieldSetRelationEntity $entity)
 * @method void set(string $key, CustomFieldSetRelationEntity $entity)
 * @method CustomFieldSetRelationEntity[] getIterator()
 * @method CustomFieldSetRelationEntity[] getElements()
 * @method CustomFieldSetRelationEntity|null get(string $key)
 * @method CustomFieldSetRelationEntity|null first()
 * @method CustomFieldSetRelationEntity|null last()
 */
class CustomFieldSetRelationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return CustomFieldSetRelationEntity::class;
    }
}
