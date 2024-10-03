<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6550\ImportExportProfile;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                           add(ImportExportProfileEntity $entity)
 * @method void                           set(ImportExportProfileEntity $entity)
 * @method ImportExportProfileEntity[]    getIterator()
 * @method ImportExportProfileEntity[]    getElements()
 * @method ImportExportProfileEntity|null get(string $key)
 * @method ImportExportProfileEntity|null first()
 * @method ImportExportProfileEntity|null last()
 */
class ImportExportProfileCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return ImportExportProfileEntity::class;
    }
}
