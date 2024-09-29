<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\ShippingMethod;

use Vin\ShopwareSdk\Data\Entity\DeliveryTime\DeliveryTimeEntity;
use Vin\ShopwareSdk\Data\Entity\ShippingMethodTranslation\ShippingMethodTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\Rule\RuleEntity;
use Vin\ShopwareSdk\Data\Entity\ShippingMethodPrice\ShippingMethodPriceCollection;
use Vin\ShopwareSdk\Data\Entity\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\Tag\TagCollection;
use Vin\ShopwareSdk\Data\Entity\OrderDelivery\OrderDeliveryCollection;
use Vin\ShopwareSdk\Data\Entity\SalesChannel\SalesChannelCollection;
use Vin\ShopwareSdk\Data\Entity\Tax\TaxEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class ShippingMethodEntity extends Entity
{
    public ?string $name = null;

    public ?bool $active = null;

    public ?int $position = null;

    public ?string $availabilityRuleId = null;

    public ?string $mediaId = null;

    public ?string $deliveryTimeId = null;

    public ?string $taxType = null;

    public ?string $taxId = null;

    public ?DeliveryTimeEntity $deliveryTime = null;

    public ?string $description = null;

    public ?string $trackingUrl = null;

    public ?ShippingMethodTranslationCollection $translations = null;

    public ?RuleEntity $availabilityRule = null;

    public ?ShippingMethodPriceCollection $prices = null;

    public ?MediaEntity $media = null;

    public ?TagCollection $tags = null;

    public ?OrderDeliveryCollection $orderDeliveries = null;

    public ?SalesChannelCollection $salesChannels = null;

    public ?SalesChannelCollection $salesChannelDefaultAssignments = null;

    public ?TaxEntity $tax = null;
}
