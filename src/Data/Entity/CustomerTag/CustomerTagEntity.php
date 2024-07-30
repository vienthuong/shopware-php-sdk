<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CustomerTag;

use Vin\ShopwareSdk\Data\Entity\Customer\CustomerEntity;
use Vin\ShopwareSdk\Data\Entity\Tag\TagEntity;
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
