<?php declare(strict_types=1);


namespace Vin\ShopwareSdk\Data\Schema;

use Vin\ShopwareSdk\Data\Collection;

/**
 * @method Schema|null get($key)
 * @method Schema|null first()
 * @method Schema|null last()
 */
class SchemaCollection extends Collection
{
    protected function getExpectedClass(): string
    {
        return Schema::class;
    }
}
