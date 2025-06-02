<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\OrderTransactionCapture;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(OrderTransactionCaptureEntity $entity)
 * @method void set(string $key, OrderTransactionCaptureEntity $entity)
 * @method OrderTransactionCaptureEntity[] getIterator()
 * @method OrderTransactionCaptureEntity[] getElements()
 * @method OrderTransactionCaptureEntity|null get(string $key)
 * @method OrderTransactionCaptureEntity|null first()
 * @method OrderTransactionCaptureEntity|null last()
 */
class OrderTransactionCaptureCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return OrderTransactionCaptureEntity::class;
    }
}
