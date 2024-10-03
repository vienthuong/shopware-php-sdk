<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkEntityGenerator\Entity\PropertyDefinition\FlagValueGeneratorForFlagAndValue;

use Vin\ShopwareSdkEntityGenerator\Entity\PropertyDefinition\FlagValueGeneratorForFlagAndValue;

final class ForReadProtectedAndWriteProtectedFlag implements FlagValueGeneratorForFlagAndValue
{
    public function generateFlagValueForConstructionString(string $flag, mixed $value): ?string
    {
        if (is_array($value) === false) {
            return null;
        }

        if ($flag !== 'read_protected' && $flag !== 'write_protected') {
            return null;
        }

        $values = array_map(fn($item) => '\'' . $item . '\'', array_merge(...$value));

        return sprintf('[[%s]]', implode(', ', $values));
    }
}
