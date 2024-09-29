<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\CmsSection;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(CmsSectionEntity $entity)
 * @method void set(CmsSectionEntity $entity)
 * @method CmsSectionEntity[] getIterator()
 * @method CmsSectionEntity[] getElements()
 * @method CmsSectionEntity|null get(string $key)
 * @method CmsSectionEntity|null first()
 * @method CmsSectionEntity|null last()
 */
class CmsSectionCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return CmsSectionEntity::class;
    }
}
