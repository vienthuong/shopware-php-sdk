<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SalesChannelPaymentMethod;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(SalesChannelPaymentMethodEntity $entity)
 * @method void set(SalesChannelPaymentMethodEntity $entity)
 * @method SalesChannelPaymentMethodEntity[] getIterator()
 * @method SalesChannelPaymentMethodEntity[] getElements()
 * @method SalesChannelPaymentMethodEntity|null get(string $key)
 * @method SalesChannelPaymentMethodEntity|null first()
 * @method SalesChannelPaymentMethodEntity|null last()
 */
class SalesChannelPaymentMethodCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return SalesChannelPaymentMethodEntity::class;
    }
}
