<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\SalutationTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(SalutationTranslationEntity $entity)
 * @method void set(string $key, SalutationTranslationEntity $entity)
 * @method SalutationTranslationEntity[] getIterator()
 * @method SalutationTranslationEntity[] getElements()
 * @method SalutationTranslationEntity|null get(string $key)
 * @method SalutationTranslationEntity|null first()
 * @method SalutationTranslationEntity|null last()
 */
class SalutationTranslationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return SalutationTranslationEntity::class;
    }
}
