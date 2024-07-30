<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\ProductCustomFieldSet;

use Vin\ShopwareSdk\Data\Entity\Product\ProductEntity;
use Vin\ShopwareSdk\Data\Entity\CustomFieldSet\CustomFieldSetEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class ProductCustomFieldSetEntity extends Entity
{
    public ?string $productId = null;

    public ?string $customFieldSetId = null;

    public ?string $productVersionId = null;

    public ?ProductEntity $product = null;

    public ?CustomFieldSetEntity $customFieldSet = null;
}
