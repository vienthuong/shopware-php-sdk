<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\ThemeSalesChannel;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ThemeSalesChannelEntity $entity)
 * @method void set(string $key, ThemeSalesChannelEntity $entity)
 * @method ThemeSalesChannelEntity[] getIterator()
 * @method ThemeSalesChannelEntity[] getElements()
 * @method ThemeSalesChannelEntity|null get(string $key)
 * @method ThemeSalesChannelEntity|null first()
 * @method ThemeSalesChannelEntity|null last()
 */
class ThemeSalesChannelCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return ThemeSalesChannelEntity::class;
    }
}
