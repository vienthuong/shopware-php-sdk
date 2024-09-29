<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data;

trait EndPointTrait
{
    private function removeLastSlashes(string $endpoint): string
    {
        while (str_ends_with($endpoint, '/')) {
            $endpoint = rtrim($endpoint, '/');
        }

        return $endpoint;
    }
}
