<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\EventActionSalesChannel;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(EventActionSalesChannelEntity $entity)
 * @method void set(EventActionSalesChannelEntity $entity)
 * @method EventActionSalesChannelEntity[] getIterator()
 * @method EventActionSalesChannelEntity[] getElements()
 * @method EventActionSalesChannelEntity|null get(string $key)
 * @method EventActionSalesChannelEntity|null first()
 * @method EventActionSalesChannelEntity|null last()
 */
class EventActionSalesChannelCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return EventActionSalesChannelEntity::class;
    }
}
