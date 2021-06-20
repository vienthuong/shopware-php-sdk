<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\AppPaymentMethod;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class AppPaymentMethodDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'app_payment_method';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return AppPaymentMethodEntity::class;
    }

    public function getEntityCollection() : string
    {
        return AppPaymentMethodCollection::class;
    }
}
