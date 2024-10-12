<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\ProductReview;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6640\Customer\CustomerEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\Product\ProductEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductReviewEntity extends Entity
{
    public ?string $productId = null;
    public ?string $productVersionId = null;
    public ?string $customerId = null;
    public ?string $salesChannelId = null;
    public ?string $languageId = null;
    public ?string $externalUser = null;
    public ?string $externalEmail = null;
    public ?string $title = null;
    public ?string $content = null;
    public ?float $points = null;
    public ?bool $status = null;
    public ?string $comment = null;
    public ?ProductEntity $product = null;
    public ?CustomerEntity $customer = null;
    public ?SalesChannelEntity $salesChannel = null;
    public ?LanguageEntity $language = null;
}
