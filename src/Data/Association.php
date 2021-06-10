<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data;

class Association
{
    public string $association;

    public Criteria $criteria;

    public function __construct(string $association, Criteria $criteria)
    {
        $this->association = $association;
        $this->criteria = $criteria;
    }
}
