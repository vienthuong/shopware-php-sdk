<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CustomerGroupTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerGroupTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'customer_group_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return CustomerGroupTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return CustomerGroupTranslationCollection::class;
    }
}
