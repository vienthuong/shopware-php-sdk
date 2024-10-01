<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Definition;

use Vin\ShopwareSdk\Data\Schema\Schema;

interface SchemaProviderInterface
{
    public function getSchema(string $entityName): Schema;
}
