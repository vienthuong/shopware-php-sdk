<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Custom;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * @method void add(CustomEntity $entity)
 * @method void set(CustomEntity $entity)
 * @method CustomEntity[] getIterator()
 * @method CustomEntity[] getElements()
 * @method CustomEntity|null get(string $key)
 * @method CustomEntity|null first()
 * @method CustomEntity|null last()
 */
class CustomCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return CustomEntity::class;
    }
}
