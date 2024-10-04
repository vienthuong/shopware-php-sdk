<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\CustomFieldSet;

use Vin\ShopwareSdk\Data\Entity\v0000\CustomFieldSetRelation\CustomFieldSetRelationCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\Product\ProductCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\App\AppEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class CustomFieldSetEntity extends Entity
{
    public ?string $name = null;

    public ?array $config = null;

    public ?bool $active = null;

    public ?bool $global = null;

    public ?int $position = null;

    public ?string $appId = null;

    public ?CustomFieldSetRelationCollection $relations = null;

    public ?ProductCollection $products = null;

    public ?AppEntity $app = null;
}
