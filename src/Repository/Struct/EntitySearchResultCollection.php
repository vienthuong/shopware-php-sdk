<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Repository\Struct;

use Vin\ShopwareSdk\Data\Collection;

/**
 * @method array<string, EntitySearchResult> getIterator()
 * @method array<string, EntitySearchResult> getElements()
 * @method EntitySearchResult|null get(string $key)
 * @method EntitySearchResult|null first()
 * @method EntitySearchResult|null last()
 */
class EntitySearchResultCollection extends Collection
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param mixed|null $element
     */
    public function add($element): void
    {
        throw new \RuntimeException('EntitySearchResults have to be added with an entity name. Use `set` method instead.');
    }

    public function getExpectedClass(): string
    {
        return EntitySearchResult::class;
    }

    /**
     * @param string $key
     * @param EntitySearchResult $element
     */
    public function set($key, $element): void
    {
        if (is_string($key)) {
            throw new \InvalidArgumentException(sprintf('Expected key of type string. Got %s.', gettype($key)));
        }

        parent::set($key, $element);
    }
}
