<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Definition;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;

interface DefinitionProviderInterface
{
    public function getDefinition(string $entityName): EntityDefinition;
}
