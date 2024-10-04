<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6580\CustomField;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6580\CustomFieldSet\CustomFieldSetEntity;
use Vin\ShopwareSdk\Data\Entity\v6580\ProductSearchConfigField\ProductSearchConfigFieldCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomFieldEntity extends Entity
{
    public ?string $name = null;

    public ?string $type = null;

    public ?array $config = null;

    public ?bool $active = null;

    public ?string $customFieldSetId = null;

    public ?bool $allowCustomerWrite = null;

    public ?bool $allowCartExpose = null;

    public ?CustomFieldSetEntity $customFieldSet = null;

    public ?ProductSearchConfigFieldCollection $productSearchConfigFields = null;
}
