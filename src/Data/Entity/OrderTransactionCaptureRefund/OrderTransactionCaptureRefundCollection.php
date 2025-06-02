<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\OrderTransactionCaptureRefund;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(OrderTransactionCaptureRefundEntity $entity)
 * @method void set(string $key, OrderTransactionCaptureRefundEntity $entity)
 * @method OrderTransactionCaptureRefundEntity[] getIterator()
 * @method OrderTransactionCaptureRefundEntity[] getElements()
 * @method OrderTransactionCaptureRefundEntity|null get(string $key)
 * @method OrderTransactionCaptureRefundEntity|null first()
 * @method OrderTransactionCaptureRefundEntity|null last()
 */
class OrderTransactionCaptureRefundCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return OrderTransactionCaptureRefundEntity::class;
    }
}
