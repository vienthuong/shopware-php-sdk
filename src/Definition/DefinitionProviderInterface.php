<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Definition;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Exception\DefinitionNotFoundException;

interface DefinitionProviderInterface
{
    /**
     * @throws DefinitionNotFoundException
     */
    public function getDefinition(string $entityName): EntityDefinition;
}
