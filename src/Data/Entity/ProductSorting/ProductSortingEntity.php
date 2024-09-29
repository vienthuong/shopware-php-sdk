<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\ProductSorting;

use Vin\ShopwareSdk\Data\Entity\ProductSortingTranslation\ProductSortingTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
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
