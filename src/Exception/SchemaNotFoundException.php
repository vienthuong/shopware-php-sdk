<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Exception;

class SchemaNotFoundException extends \RuntimeException
{
    public function __construct(string $entityName)
    {
        parent::__construct(sprintf('Could not find schema for entity "%s"', $entityName));
    }
}
