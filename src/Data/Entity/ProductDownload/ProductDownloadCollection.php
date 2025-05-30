<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\ProductDownload;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(ProductDownloadEntity $entity)
 * @method void set(string $key, ProductDownloadEntity $entity)
 * @method ProductDownloadEntity[] getIterator()
 * @method ProductDownloadEntity[] getElements()
 * @method ProductDownloadEntity|null get(string $key)
 * @method ProductDownloadEntity|null first()
 * @method ProductDownloadEntity|null last()
 */
class ProductDownloadCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return ProductDownloadEntity::class;
    }
}
