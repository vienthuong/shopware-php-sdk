<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\Integration;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(IntegrationEntity $entity)
 * @method void set(IntegrationEntity $entity)
 * @method IntegrationEntity[] getIterator()
 * @method IntegrationEntity[] getElements()
 * @method IntegrationEntity|null get(string $key)
 * @method IntegrationEntity|null first()
 * @method IntegrationEntity|null last()
 */
class IntegrationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return IntegrationEntity::class;
    }
}
