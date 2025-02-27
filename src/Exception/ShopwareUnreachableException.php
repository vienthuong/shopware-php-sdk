<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Exception;

class ShopwareUnreachableException extends \Exception
{
    public function __construct(\Throwable $previous = null)
    {
        parent::__construct('Shop is unreachable', 500, $previous);
    }
}
