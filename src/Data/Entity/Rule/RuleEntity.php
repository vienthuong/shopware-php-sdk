<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Rule;

use Vin\ShopwareSdk\Data\Entity\RuleCondition\RuleConditionCollection;
use Vin\ShopwareSdk\Data\Entity\ProductPrice\ProductPriceCollection;
use Vin\ShopwareSdk\Data\Entity\ShippingMethodPrice\ShippingMethodPriceCollection;
use Vin\ShopwareSdk\Data\Entity\ShippingMethod\ShippingMethodCollection;
use Vin\ShopwareSdk\Data\Entity\PaymentMethod\PaymentMethodCollection;
use Vin\ShopwareSdk\Data\Entity\FlowSequence\FlowSequenceCollection;
use Vin\ShopwareSdk\Data\Entity\TaxProvider\TaxProviderCollection;
use Vin\ShopwareSdk\Data\Entity\Tag\TagCollection;
use Vin\ShopwareSdk\Data\Entity\Promotion\PromotionCollection;
use Vin\ShopwareSdk\Data\Entity\PromotionDiscount\PromotionDiscountCollection;
use Vin\ShopwareSdk\Data\Entity\PromotionSetgroup\PromotionSetgroupCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
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
