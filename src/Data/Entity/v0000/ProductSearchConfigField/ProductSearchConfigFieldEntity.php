<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\ProductSearchConfigField;

use Vin\ShopwareSdk\Data\Entity\v0000\ProductSearchConfig\ProductSearchConfigEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\CustomField\CustomFieldEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class ProductSearchConfigFieldEntity extends Entity
{
    public ?string $searchConfigId = null;

    public ?string $customFieldId = null;

    public ?string $field = null;

    public ?bool $tokenize = null;

    public ?bool $searchable = null;

    public ?int $ranking = null;

    public ?ProductSearchConfigEntity $searchConfig = null;

    public ?CustomFieldEntity $customField = null;
}
