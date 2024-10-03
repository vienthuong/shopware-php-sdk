<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkEntityGenerator\Entity\PropertyDefinition;

interface FlagGeneratorInterface
{
    public function generateFlagConstructionString(string $flag, mixed $value): string;
}
