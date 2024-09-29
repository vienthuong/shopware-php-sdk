<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\CustomField;

use Vin\ShopwareSdk\Data\Entity\CustomFieldSet\CustomFieldSetEntity;
use Vin\ShopwareSdk\Data\Entity\ProductSearchConfigField\ProductSearchConfigFieldCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class CustomFieldEntity extends Entity
{
    public ?string $name = null;

    public ?string $type = null;

    public ?array $config = null;

    public ?bool $active = null;

    public ?string $customFieldSetId = null;

    public ?bool $allowCustomerWrite = null;

    public ?CustomFieldSetEntity $customFieldSet = null;

    public ?ProductSearchConfigFieldCollection $productSearchConfigFields = null;
}
