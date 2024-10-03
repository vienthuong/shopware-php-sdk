<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6560\Snippet;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void               add(SnippetEntity $entity)
 * @method void               set(SnippetEntity $entity)
 * @method SnippetEntity[]    getIterator()
 * @method SnippetEntity[]    getElements()
 * @method SnippetEntity|null get(string $key)
 * @method SnippetEntity|null first()
 * @method SnippetEntity|null last()
 */
class SnippetCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return SnippetEntity::class;
    }
}
