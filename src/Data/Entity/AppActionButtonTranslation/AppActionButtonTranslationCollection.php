<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\AppActionButtonTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(AppActionButtonTranslationEntity $entity)
 * @method void set(string $key, AppActionButtonTranslationEntity $entity)
 * @method AppActionButtonTranslationEntity[] getIterator()
 * @method AppActionButtonTranslationEntity[] getElements()
 * @method AppActionButtonTranslationEntity|null get(string $key)
 * @method AppActionButtonTranslationEntity|null first()
 * @method AppActionButtonTranslationEntity|null last()
 */
class AppActionButtonTranslationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return AppActionButtonTranslationEntity::class;
    }
}
