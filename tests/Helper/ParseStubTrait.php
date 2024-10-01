<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest\Helper;

trait ParseStubTrait
{
    /**
     * @return array<string, mixed>
     */
    private static function parseStub(string $stubName): array
    {
        $jsonPath = __DIR__ . '/../stubs/' . $stubName . '.json';

        /** @phpstan-ignore-next-line */
        return json_decode(file_get_contents($jsonPath), true);
    }
}
