<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6588\OrderTransactionCaptureRefundPosition;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                                             add(OrderTransactionCaptureRefundPositionEntity $entity)
 * @method void                                             set(OrderTransactionCaptureRefundPositionEntity $entity)
 * @method OrderTransactionCaptureRefundPositionEntity[]    getIterator()
 * @method OrderTransactionCaptureRefundPositionEntity[]    getElements()
 * @method OrderTransactionCaptureRefundPositionEntity|null get(string $key)
 * @method OrderTransactionCaptureRefundPositionEntity|null first()
 * @method OrderTransactionCaptureRefundPositionEntity|null last()
 */
class OrderTransactionCaptureRefundPositionCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return OrderTransactionCaptureRefundPositionEntity::class;
    }
}
