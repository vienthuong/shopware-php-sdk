<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Definition;

use Vin\ShopwareSdk\Data\Schema\Schema;

final class SchemaCollection
{
    /**
     * @var array<string, Schema>
     */
    private array $schemas = [];

    public function set(string $entityName, Schema $schema): void
    {
        $this->schemas[$entityName] = $schema;
    }

    public function get(string $entityName): ?Schema
    {
        return $this->schemas[$entityName] ?? null;
    }
}
