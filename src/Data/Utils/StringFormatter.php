<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Utils;

class StringFormatter
{
    public static function camelCase(string $string): string
    {
        $string = str_replace('-', '_', $string);
        $parts = explode('_', $string);
        $parts = array_map('ucfirst', $parts);

        return lcfirst(implode('', $parts));
    }

    public static function pascalCase(string $string): string
    {
        $string = str_replace('-', '_', $string);
        $parts = explode('_', $string);
        $parts = array_map('ucfirst', $parts);

        return ucfirst(implode('', $parts));
    }
}
