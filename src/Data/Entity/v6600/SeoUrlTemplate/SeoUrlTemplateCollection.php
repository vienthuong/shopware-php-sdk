<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\SeoUrlTemplate;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                      add(SeoUrlTemplateEntity $entity)
 * @method void                      set(SeoUrlTemplateEntity $entity)
 * @method SeoUrlTemplateEntity[]    getIterator()
 * @method SeoUrlTemplateEntity[]    getElements()
 * @method SeoUrlTemplateEntity|null get(string $key)
 * @method SeoUrlTemplateEntity|null first()
 * @method SeoUrlTemplateEntity|null last()
 */
class SeoUrlTemplateCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return SeoUrlTemplateEntity::class;
    }
}
