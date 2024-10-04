<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v65812\CustomerTag;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v65812\Customer\CustomerEntity;
use Vin\ShopwareSdk\Data\Entity\v65812\Tag\TagEntity;

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
