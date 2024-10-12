<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\CmsPage;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void               add(CmsPageEntity $entity)
 * @method void               set(CmsPageEntity $entity)
 * @method CmsPageEntity[]    getIterator()
 * @method CmsPageEntity[]    getElements()
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
