<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\Plugin;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void              add(PluginEntity $entity)
 * @method void              set(PluginEntity $entity)
 * @method PluginEntity[]    getIterator()
 * @method PluginEntity[]    getElements()
 * @method PluginEntity|null get(string $key)
 * @method PluginEntity|null first()
 * @method PluginEntity|null last()
 */
class PluginCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return PluginEntity::class;
    }
}
