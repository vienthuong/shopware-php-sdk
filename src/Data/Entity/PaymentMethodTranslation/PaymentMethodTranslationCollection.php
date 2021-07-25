<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\PaymentMethodTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(PaymentMethodTranslationEntity $entity)
 * @method void set(PaymentMethodTranslationEntity $entity)
 * @method PaymentMethodTranslationEntity[] getIterator()
 * @method PaymentMethodTranslationEntity[] getElements()
 * @method PaymentMethodTranslationEntity|null get(string $key)
 * @method PaymentMethodTranslationEntity|null first()
 * @method PaymentMethodTranslationEntity|null last()
 */
class PaymentMethodTranslationCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return PaymentMethodTranslationEntity::class;
    }
}
