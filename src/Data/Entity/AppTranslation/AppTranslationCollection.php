<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\AppTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(AppTranslationEntity $entity)
 * @method void set(string $key, AppTranslationEntity $entity)
 * @method AppTranslationEntity[] getIterator()
 * @method AppTranslationEntity[] getElements()
 * @method AppTranslationEntity|null get(string $key)
 * @method AppTranslationEntity|null first()
 * @method AppTranslationEntity|null last()
 */
class AppTranslationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return AppTranslationEntity::class;
    }
}
