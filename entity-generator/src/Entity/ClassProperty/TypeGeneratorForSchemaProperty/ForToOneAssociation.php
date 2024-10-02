<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkEntityGenerator\Entity\ClassProperty\TypeGeneratorForSchemaProperty;

use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Vin\ShopwareSdkEntityGenerator\Entity\ClassProperty\TypeGeneratorForSchemaProperty;
use Vin\ShopwareSdk\Data\Schema\Property;
use function Symfony\Component\String\u;

final class ForToOneAssociation implements TypeGeneratorForSchemaProperty
{
    public function __construct(
        #[Autowire(env: 'SDK_DATA_NAMESPACE')]
        private readonly string $dataNamespace
    ) {
    }

    public function generateClassPropertyType(Property $schemaProperty): ?string
    {
        if ($schemaProperty->isToOneAssociation() === false) {
            return null;
        }

        $entityName = u($schemaProperty->entity)
            ->camel()
            ->title();
        $namespace = $this->dataNamespace . $entityName . '\\';

        return $namespace . $entityName . 'Entity';
    }
}
