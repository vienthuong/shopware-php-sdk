<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CustomEntity;

use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomEntityEntity extends Entity
{
    public ?string $name = null;

    public ?array $fields = null;

    public ?array $flags = null;

    public ?string $appId = null;

    public ?string $pluginId = null;

    public ?bool $cmsAware = null;

    public ?bool $storeApiAware = null;
}
