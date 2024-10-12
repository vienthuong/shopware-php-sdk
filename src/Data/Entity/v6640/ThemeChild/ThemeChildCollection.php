<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\ThemeChild;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                  add(ThemeChildEntity $entity)
 * @method void                  set(ThemeChildEntity $entity)
 * @method ThemeChildEntity[]    getIterator()
 * @method ThemeChildEntity[]    getElements()
 * @method ThemeChildEntity|null get(string $key)
 * @method ThemeChildEntity|null first()
 * @method ThemeChildEntity|null last()
 */
class ThemeChildCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return ThemeChildEntity::class;
    }
}
