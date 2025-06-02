<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\UnitTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(UnitTranslationEntity $entity)
 * @method void set(string $key, UnitTranslationEntity $entity)
 * @method UnitTranslationEntity[] getIterator()
 * @method UnitTranslationEntity[] getElements()
 * @method UnitTranslationEntity|null get(string $key)
 * @method UnitTranslationEntity|null first()
 * @method UnitTranslationEntity|null last()
 */
class UnitTranslationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return UnitTranslationEntity::class;
    }
}
