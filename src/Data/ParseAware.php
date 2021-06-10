<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data;

interface ParseAware
{
    public function parse(): array;
}
