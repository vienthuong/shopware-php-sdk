<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\DocumentBaseConfig;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(DocumentBaseConfigEntity $entity)
 * @method void set(string $key, DocumentBaseConfigEntity $entity)
 * @method DocumentBaseConfigEntity[] getIterator()
 * @method DocumentBaseConfigEntity[] getElements()
 * @method DocumentBaseConfigEntity|null get(string $key)
 * @method DocumentBaseConfigEntity|null first()
 * @method DocumentBaseConfigEntity|null last()
 */
class DocumentBaseConfigCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return DocumentBaseConfigEntity::class;
    }
}
