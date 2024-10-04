<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6560\CmsSlotTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                          add(CmsSlotTranslationEntity $entity)
 * @method void                          set(CmsSlotTranslationEntity $entity)
 * @method CmsSlotTranslationEntity[]    getIterator()
 * @method CmsSlotTranslationEntity[]    getElements()
 * @method CmsSlotTranslationEntity|null get(string $key)
 * @method CmsSlotTranslationEntity|null first()
 * @method CmsSlotTranslationEntity|null last()
 */
class CmsSlotTranslationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return CmsSlotTranslationEntity::class;
    }
}
