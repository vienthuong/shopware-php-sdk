<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Schema;

use Vin\ShopwareSdk\Data\Collection;

/**
 * @method Property|null get($key)
 * @method Property|null first()
 * @method Property|null last()
 */
class PropertyCollection extends Collection
{
    protected function getExpectedClass(): ?string
    {
        return Property::class;
    }
}
