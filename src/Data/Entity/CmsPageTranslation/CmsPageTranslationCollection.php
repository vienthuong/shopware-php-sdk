<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\CmsPageTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(CmsPageTranslationEntity $entity)
 * @method void set(string $key, CmsPageTranslationEntity $entity)
 * @method CmsPageTranslationEntity[] getIterator()
 * @method CmsPageTranslationEntity[] getElements()
 * @method CmsPageTranslationEntity|null get(string $key)
 * @method CmsPageTranslationEntity|null first()
 * @method CmsPageTranslationEntity|null last()
 */
class CmsPageTranslationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return CmsPageTranslationEntity::class;
    }
}
