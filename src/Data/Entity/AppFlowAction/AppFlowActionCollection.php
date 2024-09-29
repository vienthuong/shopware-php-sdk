<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\AppFlowAction;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(AppFlowActionEntity $entity)
 * @method void set(AppFlowActionEntity $entity)
 * @method AppFlowActionEntity[] getIterator()
 * @method AppFlowActionEntity[] getElements()
 * @method AppFlowActionEntity|null get(string $key)
 * @method AppFlowActionEntity|null first()
 * @method AppFlowActionEntity|null last()
 */
class AppFlowActionCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return AppFlowActionEntity::class;
    }
}
