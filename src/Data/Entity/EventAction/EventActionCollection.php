<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\EventAction;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(EventActionEntity $entity)
 * @method void set(EventActionEntity $entity)
 * @method EventActionEntity[] getIterator()
 * @method EventActionEntity[] getElements()
 * @method EventActionEntity|null get(string $key)
 * @method EventActionEntity|null first()
 * @method EventActionEntity|null last()
 */
class EventActionCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return EventActionEntity::class;
    }
}
