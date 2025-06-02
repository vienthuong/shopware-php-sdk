<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\SalesChannelTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(SalesChannelTranslationEntity $entity)
 * @method void set(string $key, SalesChannelTranslationEntity $entity)
 * @method SalesChannelTranslationEntity[] getIterator()
 * @method SalesChannelTranslationEntity[] getElements()
 * @method SalesChannelTranslationEntity|null get(string $key)
 * @method SalesChannelTranslationEntity|null first()
 * @method SalesChannelTranslationEntity|null last()
 */
class SalesChannelTranslationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return SalesChannelTranslationEntity::class;
    }
}
