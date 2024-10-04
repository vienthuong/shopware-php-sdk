<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6580\Rule;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6580\FlowSequence\FlowSequenceCollection;
use Vin\ShopwareSdk\Data\Entity\v6580\PaymentMethod\PaymentMethodCollection;
use Vin\ShopwareSdk\Data\Entity\v6580\ProductPrice\ProductPriceCollection;
use Vin\ShopwareSdk\Data\Entity\v6580\Promotion\PromotionCollection;
use Vin\ShopwareSdk\Data\Entity\v6580\PromotionDiscount\PromotionDiscountCollection;
use Vin\ShopwareSdk\Data\Entity\v6580\PromotionSetgroup\PromotionSetgroupCollection;
use Vin\ShopwareSdk\Data\Entity\v6580\RuleCondition\RuleConditionCollection;
use Vin\ShopwareSdk\Data\Entity\v6580\ShippingMethod\ShippingMethodCollection;
use Vin\ShopwareSdk\Data\Entity\v6580\ShippingMethodPrice\ShippingMethodPriceCollection;
use Vin\ShopwareSdk\Data\Entity\v6580\Tag\TagCollection;
use Vin\ShopwareSdk\Data\Entity\v6580\TaxProvider\TaxProviderCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class RuleEntity extends Entity
{
    public ?string $name = null;

    public ?int $priority = null;

    public ?string $description = null;

    public ?string $payload = null;

    public ?bool $invalid = null;

    public ?array $areas = null;

    public ?array $moduleTypes = null;

    public ?RuleConditionCollection $conditions = null;

    public ?ProductPriceCollection $productPrices = null;

    public ?ShippingMethodPriceCollection $shippingMethodPrices = null;

    public ?ShippingMethodPriceCollection $shippingMethodPriceCalculations = null;

    public ?ShippingMethodCollection $shippingMethods = null;

    public ?PaymentMethodCollection $paymentMethods = null;

    public ?PromotionCollection $personaPromotions = null;

    public ?FlowSequenceCollection $flowSequences = null;

    public ?TaxProviderCollection $taxProviders = null;

    public ?TagCollection $tags = null;

    public ?PromotionCollection $orderPromotions = null;

    public ?PromotionCollection $cartPromotions = null;

    public ?PromotionDiscountCollection $promotionDiscounts = null;

    public ?PromotionSetgroupCollection $promotionSetGroups = null;
}