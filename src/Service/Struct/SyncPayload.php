<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Service\Struct;

use Vin\ShopwareSdk\Data\Collection;
use Vin\ShopwareSdk\Data\ParseAware;

class SyncPayload extends Collection implements ParseAware
{
    public function parse(): array
    {
        $payload = [];
        /** @var SyncOperator $element */
        foreach ($this->elements as $key => $element) {
            $payload[$key] = $element->parse();
        }

        return $payload;
    }

    protected function getExpectedClass(): ?string
    {
        return SyncOperator::class;
    }
}
