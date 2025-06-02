<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\AppCmsBlockTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(AppCmsBlockTranslationEntity $entity)
 * @method void set(string $key, AppCmsBlockTranslationEntity $entity)
 * @method AppCmsBlockTranslationEntity[] getIterator()
 * @method AppCmsBlockTranslationEntity[] getElements()
 * @method AppCmsBlockTranslationEntity|null get(string $key)
 * @method AppCmsBlockTranslationEntity|null first()
 * @method AppCmsBlockTranslationEntity|null last()
 */
class AppCmsBlockTranslationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return AppCmsBlockTranslationEntity::class;
    }
}
