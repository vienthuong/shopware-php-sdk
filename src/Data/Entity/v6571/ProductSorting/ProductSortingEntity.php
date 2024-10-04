<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6571\ProductSorting;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6571\ProductSortingTranslation\ProductSortingTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductSortingEntity extends Entity
{
    public ?bool $locked = null;

    public ?string $key = null;

    public ?int $priority = null;

    public ?bool $active = null;

    public ?array $fields = null;

    public ?string $label = null;

    public ?ProductSortingTranslationCollection $translations = null;
}
