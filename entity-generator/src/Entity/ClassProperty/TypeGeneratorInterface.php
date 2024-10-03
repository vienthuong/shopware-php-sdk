<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkEntityGenerator\Entity\ClassProperty;

use Vin\ShopwareSdk\Data\Schema\Property;

interface TypeGeneratorInterface
{
    public function generateClassPropertyType(Property $schemaProperty): string;
}
