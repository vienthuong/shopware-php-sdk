<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkEntityGenerator\Entity\PropertyDefinition;

interface PropertiesGeneratorInterface
{
    public function generatePropertiesArrayString(?string $entity, ?string $referenceField, ?string $localField, ?string $relation, ?array $properties, int $arrayValueIndentationWhitespaceCount): string;
}
