<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\ProductExport;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductExportEntity $entity)
 * @method void set(string $key, ProductExportEntity $entity)
 * @method ProductExportEntity[] getIterator()
 * @method ProductExportEntity[] getElements()
 * @method ProductExportEntity|null get(string $key)
 * @method ProductExportEntity|null first()
 * @method ProductExportEntity|null last()
 */
class ProductExportCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return ProductExportEntity::class;
    }
}
