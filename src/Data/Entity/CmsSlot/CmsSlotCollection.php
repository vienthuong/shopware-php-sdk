<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\CmsSlot;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(CmsSlotEntity $entity)
 * @method void set(CmsSlotEntity $entity)
 * @method CmsSlotEntity[] getIterator()
 * @method CmsSlotEntity[] getElements()
 * @method CmsSlotEntity|null get(string $key)
 * @method CmsSlotEntity|null first()
 * @method CmsSlotEntity|null last()
 */
class CmsSlotCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return CmsSlotEntity::class;
    }
}
