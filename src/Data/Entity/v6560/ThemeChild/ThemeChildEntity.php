<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6560\ThemeChild;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6560\Theme\ThemeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ThemeChildEntity extends Entity
{
    public ?string $parentId = null;

    public ?string $childId = null;

    public ?ThemeEntity $parentTheme = null;

    public ?ThemeEntity $childTheme = null;
}
