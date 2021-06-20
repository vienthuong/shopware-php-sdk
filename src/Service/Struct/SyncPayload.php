<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Service\Struct;

use Vin\ShopwareSdk\Data\Collection;

class SyncPayload extends Collection
{
    protected function getExpectedClass(): ?string
    {
        return SyncOperator::class;
    }
}
