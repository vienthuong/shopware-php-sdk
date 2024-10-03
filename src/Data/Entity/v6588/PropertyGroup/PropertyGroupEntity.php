<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6588\PropertyGroup;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6588\PropertyGroupOption\PropertyGroupOptionCollection;
use Vin\ShopwareSdk\Data\Entity\v6588\PropertyGroupTranslation\PropertyGroupTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PropertyGroupEntity extends Entity
{
    public ?string $name = null;

    public ?string $description = null;

    public ?string $displayType = null;

    public ?string $sortingType = null;

    public ?bool $filterable = null;

    public ?bool $visibleOnProductDetailPage = null;

    public ?int $position = null;

    public ?PropertyGroupOptionCollection $options = null;

    public ?PropertyGroupTranslationCollection $translations = null;
}
