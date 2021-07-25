<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CustomerRecovery;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(CustomerRecoveryEntity $entity)
 * @method void set(CustomerRecoveryEntity $entity)
 * @method CustomerRecoveryEntity[] getIterator()
 * @method CustomerRecoveryEntity[] getElements()
 * @method CustomerRecoveryEntity|null get(string $key)
 * @method CustomerRecoveryEntity|null first()
 * @method CustomerRecoveryEntity|null last()
 */
class CustomerRecoveryCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return CustomerRecoveryEntity::class;
    }
}
