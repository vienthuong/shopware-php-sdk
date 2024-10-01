<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Exception;

class DefinitionNotFoundException extends \RuntimeException
{
    public function __construct(string $entityName)
    {
        parent::__construct(sprintf('Could not find definition for entity "%s"', $entityName));
    }
}
