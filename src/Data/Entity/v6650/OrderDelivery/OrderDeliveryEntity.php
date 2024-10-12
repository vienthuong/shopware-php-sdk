<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\OrderDelivery;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6650\Order\OrderEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\OrderAddress\OrderAddressEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\OrderDeliveryPosition\OrderDeliveryPositionCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\ShippingMethod\ShippingMethodEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\StateMachineState\StateMachineStateEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderDeliveryEntity extends Entity
{
    public ?string $orderId = null;
    public ?string $orderVersionId = null;
    public ?string $shippingOrderAddressId = null;
    public ?string $shippingOrderAddressVersionId = null;
    public ?string $shippingMethodId = null;
    public ?string $stateId = null;
    public ?StateMachineStateEntity $stateMachineState = null;
    public ?array $trackingCodes = null;
    public ?\DateTimeInterface $shippingDateEarliest = null;
    public ?\DateTimeInterface $shippingDateLatest = null;
    public ?array $shippingCosts = null;
    public ?OrderEntity $order = null;
    public ?OrderAddressEntity $shippingOrderAddress = null;
    public ?ShippingMethodEntity $shippingMethod = null;
    public ?OrderDeliveryPositionCollection $positions = null;
}
