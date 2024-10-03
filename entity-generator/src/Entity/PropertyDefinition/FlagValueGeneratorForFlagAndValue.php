<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkEntityGenerator\Entity\PropertyDefinition;

use Symfony\Component\DependencyInjection\Attribute\Autoconfigure;

#[Autoconfigure(tags: [FlagValueGeneratorForFlagAndValue::DI_SERVICE_TAG])]
interface FlagValueGeneratorForFlagAndValue
{
    public const DI_SERVICE_TAG = 'vin.shopware_sdk_entity_generator.entity.property_definition.flag_value_generator_for_flag_and_value';

    public function generateFlagValueForConstructionString(string $flag, mixed $value): ?string;
}
