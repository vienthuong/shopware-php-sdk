<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\PaymentMethodTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PaymentMethodTranslationDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'payment_method_translation';

    public function getEntityName() : string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass() : string
    {
        return PaymentMethodTranslationEntity::class;
    }

    public function getEntityCollection() : string
    {
        return PaymentMethodTranslationCollection::class;
    }
}
