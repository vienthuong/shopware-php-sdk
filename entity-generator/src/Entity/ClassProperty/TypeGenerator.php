<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkEntityGenerator\Entity\ClassProperty;

use Symfony\Component\DependencyInjection\Attribute\AutowireIterator;
use Vin\ShopwareSdk\Data\Schema\Property;

final class TypeGenerator implements TypeGeneratorInterface
{
    /**
     * @param iterable<TypeGeneratorForSchemaProperty> $classPropertyTypeGenerators
     */
    public function __construct(
        #[AutowireIterator(TypeGeneratorForSchemaProperty::DI_SERVICE_TAG)]
        private readonly iterable $classPropertyTypeGenerators
    ) {
    }

    public function generateClassPropertyType(Property $schemaProperty): string
    {
        foreach ($this->classPropertyTypeGenerators as $classPropertyTypeGenerator) {
            $classPropertyType = $classPropertyTypeGenerator->generateClassPropertyType($schemaProperty);
            if ($classPropertyType !== null) {
                return $classPropertyType;
            }
        }

        throw new \RuntimeException(sprintf('No class property type generator found for schema property %s of type %s', $schemaProperty->name, $schemaProperty->type));
    }
}
