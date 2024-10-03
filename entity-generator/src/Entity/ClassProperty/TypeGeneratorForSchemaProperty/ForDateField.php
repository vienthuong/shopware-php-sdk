<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkEntityGenerator\Entity\ClassProperty\TypeGeneratorForSchemaProperty;

use Vin\ShopwareSdkEntityGenerator\Entity\ClassProperty\TypeGeneratorForSchemaProperty;
use Vin\ShopwareSdk\Data\Schema\Property;

final class ForDateField implements TypeGeneratorForSchemaProperty
{
    public function generateClassPropertyType(Property $schemaProperty): ?string
    {
        if ($schemaProperty->type !== 'date') {
            return null;
        }

        return \DateTimeInterface::class;
    }
}
