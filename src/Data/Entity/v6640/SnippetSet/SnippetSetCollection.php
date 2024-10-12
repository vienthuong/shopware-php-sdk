<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\SnippetSet;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                  add(SnippetSetEntity $entity)
 * @method void                  set(SnippetSetEntity $entity)
 * @method SnippetSetEntity[]    getIterator()
 * @method SnippetSetEntity[]    getElements()
 * @method SnippetSetEntity|null get(string $key)
 * @method SnippetSetEntity|null first()
 * @method SnippetSetEntity|null last()
 */
class SnippetSetCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return SnippetSetEntity::class;
    }
}
