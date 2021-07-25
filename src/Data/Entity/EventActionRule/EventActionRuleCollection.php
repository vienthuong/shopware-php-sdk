<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\EventActionRule;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(EventActionRuleEntity $entity)
 * @method void set(EventActionRuleEntity $entity)
 * @method EventActionRuleEntity[] getIterator()
 * @method EventActionRuleEntity[] getElements()
 * @method EventActionRuleEntity|null get(string $key)
 * @method EventActionRuleEntity|null first()
 * @method EventActionRuleEntity|null last()
 */
class EventActionRuleCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return EventActionRuleEntity::class;
    }
}
