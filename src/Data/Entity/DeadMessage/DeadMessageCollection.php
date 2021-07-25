<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\DeadMessage;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(DeadMessageEntity $entity)
 * @method void set(DeadMessageEntity $entity)
 * @method DeadMessageEntity[] getIterator()
 * @method DeadMessageEntity[] getElements()
 * @method DeadMessageEntity|null get(string $key)
 * @method DeadMessageEntity|null first()
 * @method DeadMessageEntity|null last()
 */
class DeadMessageCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return DeadMessageEntity::class;
    }
}
