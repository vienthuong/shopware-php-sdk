<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SystemConfig;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(SystemConfigEntity $entity)
 * @method void set(SystemConfigEntity $entity)
 * @method SystemConfigEntity[] getIterator()
 * @method SystemConfigEntity[] getElements()
 * @method SystemConfigEntity|null get(string $key)
 * @method SystemConfigEntity|null first()
 * @method SystemConfigEntity|null last()
 */
class SystemConfigCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return SystemConfigEntity::class;
    }
}
