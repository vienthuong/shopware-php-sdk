<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\CmsPage;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(CmsPageEntity $entity)
 * @method void set(string $key, CmsPageEntity $entity)
 * @method CmsPageEntity[] getIterator()
 * @method CmsPageEntity[] getElements()
 * @method CmsPageEntity|null get(string $key)
 * @method CmsPageEntity|null first()
 * @method CmsPageEntity|null last()
 */
class CmsPageCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return CmsPageEntity::class;
    }
}
