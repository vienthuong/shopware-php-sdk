<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6560\ShippingMethodTag;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6560\ShippingMethod\ShippingMethodEntity;
use Vin\ShopwareSdk\Data\Entity\v6560\Tag\TagEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ShippingMethodTagEntity extends Entity
{
    public ?string $shippingMethodId = null;

    public ?string $tagId = null;

    public ?ShippingMethodEntity $shippingMethod = null;

    public ?TagEntity $tag = null;
}
