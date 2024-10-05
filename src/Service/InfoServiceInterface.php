<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Data\Schema\Schema;
use Vin\ShopwareSdk\Data\Schema\SchemaCollection;

interface InfoServiceInterface
{
    public function fetchRawSchema(): ApiResponse;

    public function getConfig(): ApiResponse;

    public function getEvents(): ApiResponse;

    public function getInfo(): ApiResponse;

    public function getOpenApiSchema(): ApiResponse;

    public function getSchema(string $entity): ?Schema;

    public function getShopwareVersion(): string;

    public function parseSchema(array $schema): SchemaCollection;

    public function refreshSchema(bool $persist = true): SchemaCollection;
}
