<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Exception;

class ShopwareUnreachableException extends ShopwareResponseException
{
    public function __construct()
    {
        parent::__construct('Shop is unreachable', 500);
    }
}
