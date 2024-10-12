<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6630\DocumentTypeTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                               add(DocumentTypeTranslationEntity $entity)
 * @method void                               set(DocumentTypeTranslationEntity $entity)
 * @method DocumentTypeTranslationEntity[]    getIterator()
 * @method DocumentTypeTranslationEntity[]    getElements()
 * @method DocumentTypeTranslationEntity|null get(string $key)
 * @method DocumentTypeTranslationEntity|null first()
 * @method DocumentTypeTranslationEntity|null last()
 */
class DocumentTypeTranslationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return DocumentTypeTranslationEntity::class;
    }
}
