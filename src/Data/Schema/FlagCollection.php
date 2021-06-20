<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Schema;

use Vin\ShopwareSdk\Data\Collection;

/**
 * @method Flag|null get($key)
 * @method Flag|null first()
 * @method Flag|null last()
 */
class FlagCollection extends Collection
{
    protected function getExpectedClass(): ?string
    {
        return Flag::class;
    }
}
