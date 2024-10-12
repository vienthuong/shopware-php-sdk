<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\ImportExportFile;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                        add(ImportExportFileEntity $entity)
 * @method void                        set(ImportExportFileEntity $entity)
 * @method ImportExportFileEntity[]    getIterator()
 * @method ImportExportFileEntity[]    getElements()
 * @method ImportExportFileEntity|null get(string $key)
 * @method ImportExportFileEntity|null first()
 * @method ImportExportFileEntity|null last()
 */
class ImportExportFileCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return ImportExportFileEntity::class;
    }
}
