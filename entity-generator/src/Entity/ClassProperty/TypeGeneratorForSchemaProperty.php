<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkEntityGenerator\Entity\ClassProperty;

use Symfony\Component\DependencyInjection\Attribute\Autoconfigure;
use Vin\ShopwareSdk\Data\Schema\Property;

#[Autoconfigure(tags: [TypeGeneratorForSchemaProperty::DI_SERVICE_TAG])]
interface TypeGeneratorForSchemaProperty
{
    public const DI_SERVICE_TAG = 'vin.shopware_sdk_entity_generator.entity.class_property.type_generator_for_schema_property';

    public function generateClassPropertyType(Property $schemaProperty): ?string;
}
