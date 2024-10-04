<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6560\ProductSearchKeyword;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6560\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6560\Product\ProductEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductSearchKeywordEntity extends Entity
{
    public ?string $languageId = null;

    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?string $keyword = null;

    public ?float $ranking = null;

    public ?ProductEntity $product = null;

    public ?LanguageEntity $language = null;
}
