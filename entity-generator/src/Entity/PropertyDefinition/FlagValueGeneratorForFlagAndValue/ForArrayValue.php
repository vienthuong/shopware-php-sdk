<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkEntityGenerator\Entity\PropertyDefinition\FlagValueGeneratorForFlagAndValue;

use Vin\ShopwareSdkEntityGenerator\Entity\PropertyDefinition\FlagValueGeneratorForFlagAndValue;

final class ForArrayValue implements FlagValueGeneratorForFlagAndValue
{
    public function generateFlagValueForConstructionString(string $flag, mixed $value): ?string
    {
        if (is_array($value) === false) {
            return null;
        }

        if ($flag === 'read_protected' || $flag === 'write_protected') {
            return null;
        }

        return sprintf('unserialize(\'%s\')', serialize($value));
    }
}
