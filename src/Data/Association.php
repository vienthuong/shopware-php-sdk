<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data;

class Association
{
    public function __construct(public string $association, public Criteria $criteria)
    {
    }
}
