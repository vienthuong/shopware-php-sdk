<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\ProductPrice;

use Vin\ShopwareSdk\Data\Entity\Product\ProductEntity;
use Vin\ShopwareSdk\Data\Entity\Rule\RuleEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class ProductPriceEntity extends Entity
{
    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?string $ruleId = null;

    public ?array $price = null;

    public ?int $quantityStart = null;

    public ?int $quantityEnd = null;

    public ?ProductEntity $product = null;

    public ?RuleEntity $rule = null;
}
