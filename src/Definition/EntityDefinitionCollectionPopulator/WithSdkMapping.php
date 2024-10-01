<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Definition\EntityDefinitionCollectionPopulator;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Definition\DefinitionCollection;
use Vin\ShopwareSdk\Definition\DefinitionCollectionPopulator;

final class WithSdkMapping implements DefinitionCollectionPopulator
{
    public static function priority(): int
    {
        return 1000;
    }

    public function populateDefinitionCollection(DefinitionCollection $definitionCollection): void
    {
        $entityMappingPath = __DIR__ . '/../../Resources/entity-mapping.json';
        $jsonEncodedMapping = (string) file_get_contents($entityMappingPath);
        /** @var array<string, class-string<EntityDefinition>> $mapping */
        $mapping = json_decode($jsonEncodedMapping, true);

        foreach ($mapping as $definitionClass) {
            if (! class_exists($definitionClass)) {
                throw new \RuntimeException(sprintf('Could not find entity definition class %s', $definitionClass));
            }

            $definitionCollection->set(new $definitionClass());
        }
    }
}
