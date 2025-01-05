<?php declare(strict_types=1);
namespace examples\MyExampleEntity;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * @method void add(MyCustomEntity $entity)
 * @method void set(MyCustomEntity $entity)
 * @method MyCustomEntity[] getIterator()
 * @method MyCustomEntity[] getElements()
 * @method MyCustomEntity|null get(string $key)
 * @method MyCustomEntity|null first()
 * @method MyCustomEntity|null last()
 */
class MyCustomCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return MyCustomEntity::class;
    }
}
