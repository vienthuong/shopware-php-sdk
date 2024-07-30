<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\OrderDelivery;

use Vin\ShopwareSdk\Data\Entity\StateMachineState\StateMachineStateEntity;
use Vin\ShopwareSdk\Data\Entity\Order\OrderEntity;
use Vin\ShopwareSdk\Data\Entity\OrderAddress\OrderAddressEntity;
use Vin\ShopwareSdk\Data\Entity\ShippingMethod\ShippingMethodEntity;
use Vin\ShopwareSdk\Data\Entity\OrderDeliveryPosition\OrderDeliveryPositionCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
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

    public ?\DateTimeInterface$shippingDateEarliest = null;

    public ?\DateTimeInterface$shippingDateLatest = null;

    public ?array $shippingCosts = null;

    public ?OrderEntity $order = null;

    public ?OrderAddressEntity $shippingOrderAddress = null;

    public ?ShippingMethodEntity $shippingMethod = null;

    public ?OrderDeliveryPositionCollection $positions = null;
}
