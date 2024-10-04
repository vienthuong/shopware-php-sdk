<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\ProductConfiguratorSetting;

use Vin\ShopwareSdk\Data\Entity\v0000\Product\ProductEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\PropertyGroupOption\PropertyGroupOptionEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class ProductConfiguratorSettingEntity extends Entity
{
    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?string $mediaId = null;

    public ?string $optionId = null;

    public ?array $price = null;

    public ?int $position = null;

    public ?ProductEntity $product = null;

    public ?MediaEntity $media = null;

    public ?PropertyGroupOptionEntity $option = null;
}