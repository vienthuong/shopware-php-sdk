<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ThemeChild;

use Vin\ShopwareSdk\Data\Entity\Theme\ThemeEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class ThemeChildEntity extends Entity
{
    public ?string $parentId = null;

    public ?string $childId = null;

    public ?ThemeEntity $parentTheme = null;

    public ?ThemeEntity $childTheme = null;
}
