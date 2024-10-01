<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Schema;

use Vin\ShopwareSdk\Data\Struct;

class Flag extends Struct
{
    public function __construct(
        public string $flag,
        public mixed $value
    ) {
    }
}
