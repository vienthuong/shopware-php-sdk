<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\DocumentType;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                    add(DocumentTypeEntity $entity)
 * @method void                    set(DocumentTypeEntity $entity)
 * @method DocumentTypeEntity[]    getIterator()
 * @method DocumentTypeEntity[]    getElements()
 * @method DocumentTypeEntity|null get(string $key)
 * @method DocumentTypeEntity|null first()
 * @method DocumentTypeEntity|null last()
 */
class DocumentTypeCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return DocumentTypeEntity::class;
    }
}
