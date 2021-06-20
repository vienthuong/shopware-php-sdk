<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CustomFieldSetRelation;

use Vin\ShopwareSdk\Data\Entity\CustomFieldSet\CustomFieldSetEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomFieldSetRelationEntity extends Entity
{
    public ?string $customFieldSetId = null;

    public ?string $entityName = null;

    public ?CustomFieldSetEntity $customFieldSet = null;
}
