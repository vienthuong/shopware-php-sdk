<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6588\OrderDeliveryPosition;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6588\OrderDelivery\OrderDeliveryEntity;
use Vin\ShopwareSdk\Data\Entity\v6588\OrderLineItem\OrderLineItemEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderDeliveryPositionEntity extends Entity
{
    public ?string $orderDeliveryId = null;

    public ?string $orderDeliveryVersionId = null;

    public ?string $orderLineItemId = null;

    public ?string $orderLineItemVersionId = null;

    public ?array $price = null;

    public ?float $unitPrice = null;

    public ?float $totalPrice = null;

    public ?int $quantity = null;

    public ?OrderDeliveryEntity $orderDelivery = null;

    public ?OrderLineItemEntity $orderLineItem = null;
}
