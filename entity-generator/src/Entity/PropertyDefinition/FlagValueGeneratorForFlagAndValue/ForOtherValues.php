<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkEntityGenerator\Entity\PropertyDefinition\FlagValueGeneratorForFlagAndValue;

use Vin\ShopwareSdkEntityGenerator\Entity\PropertyDefinition\FlagValueGeneratorForFlagAndValue;

final class ForOtherValues implements FlagValueGeneratorForFlagAndValue
{
    public function generateFlagValueForConstructionString(string $flag, mixed $value): ?string
    {
        if (is_string($value) === true || is_array($value) === true) {
            return null;
        }

        return (string) $value;
    }
}
