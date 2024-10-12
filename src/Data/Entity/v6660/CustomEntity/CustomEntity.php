<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6660\CustomEntity;

use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomEntity extends Entity
{
    public ?string $name = null;
    public ?array $fields = null;
    public ?array $flags = null;
    public ?string $appId = null;
    public ?string $pluginId = null;
    public ?bool $cmsAware = null;
    public ?bool $storeApiAware = null;
    public ?bool $customFieldsAware = null;
    public ?string $labelProperty = null;
    public ?\DateTimeInterface $deletedAt = null;
}
