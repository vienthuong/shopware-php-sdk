<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\Theme;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ThemeEntity $entity)
 * @method void set(ThemeEntity $entity)
 * @method ThemeEntity[] getIterator()
 * @method ThemeEntity[] getElements()
 * @method ThemeEntity|null get(string $key)
 * @method ThemeEntity|null first()
 * @method ThemeEntity|null last()
 */
class ThemeCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return ThemeEntity::class;
    }
}
