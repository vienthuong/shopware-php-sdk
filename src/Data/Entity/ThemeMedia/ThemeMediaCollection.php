<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\ThemeMedia;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ThemeMediaEntity $entity)
 * @method void set(string $key, ThemeMediaEntity $entity)
 * @method ThemeMediaEntity[] getIterator()
 * @method ThemeMediaEntity[] getElements()
 * @method ThemeMediaEntity|null get(string $key)
 * @method ThemeMediaEntity|null first()
 * @method ThemeMediaEntity|null last()
 */
class ThemeMediaCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return ThemeMediaEntity::class;
    }
}
