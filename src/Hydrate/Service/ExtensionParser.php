<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Hydrate\Service;

use Vin\ShopwareSdk\Hydrate\Result\EntityExtensionResult;

final class ExtensionParser implements ExtensionParserInterface
{
    public function parseExtensions(array $datasets): array
    {
        $extensions = [];
        foreach ($datasets as $propertyName => $extensionData) {
            if ($propertyName !== 'extensions') {
                continue;
            }
            if (array_key_exists('data', $extensionData) === false) {
                continue;
            }
            if (is_array($extensionData['data']) === false) {
                continue;
            }

            if (array_is_list($extensionData['data']) === false) {
                /** @var array{type: string, id: string} $data */
                $data = $extensionData['data'];
                $extensions[] = EntityExtensionResult::fromData($data);
            }
        }

        return $extensions;
    }
}
