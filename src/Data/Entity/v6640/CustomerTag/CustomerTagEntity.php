<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\CustomerTag;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6640\Customer\CustomerEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\Tag\TagEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerTagEntity extends Entity
{
    public ?string $customerId = null;
    public ?string $tagId = null;
    public ?CustomerEntity $customer = null;
    public ?TagEntity $tag = null;
}
