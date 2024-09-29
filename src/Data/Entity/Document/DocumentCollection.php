<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\Document;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(DocumentEntity $entity)
 * @method void set(DocumentEntity $entity)
 * @method DocumentEntity[] getIterator()
 * @method DocumentEntity[] getElements()
 * @method DocumentEntity|null get(string $key)
 * @method DocumentEntity|null first()
 * @method DocumentEntity|null last()
 */
class DocumentCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return DocumentEntity::class;
    }
}
