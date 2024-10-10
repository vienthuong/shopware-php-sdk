<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service\Struct;

use Vin\ShopwareSdk\Data\ParseAware;

class Config implements ParseAware
{
    public function __construct(
        private readonly string $key,
        private readonly mixed $value
    ) {
    }

    public function parse(): array
    {
        return [
            $this->key => $this->value,
        ];
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getValue(): mixed
    {
        return $this->value;
    }
}
