<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\CustomerTag;

use Vin\ShopwareSdk\Data\Entity\v0000\Customer\CustomerEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Tag\TagEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class CustomerTagEntity extends Entity
{
    public ?string $customerId = null;

    public ?string $tagId = null;

    public ?CustomerEntity $customer = null;

    public ?TagEntity $tag = null;
}
