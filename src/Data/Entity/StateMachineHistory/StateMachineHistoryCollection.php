<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\StateMachineHistory;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class StateMachineHistoryCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return StateMachineHistoryEntity::class;
    }
}
