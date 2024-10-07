<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Data\Schema\Schema;
use Vin\ShopwareSdk\Data\Schema\SchemaCollection;
use Vin\ShopwareSdk\Exception\AuthorizationFailedException;
use Vin\ShopwareSdk\Service\Struct\ApiResponse;

interface InfoServiceInterface
{
    /**
     * @throws AuthorizationFailedException
     */
    public function fetchRawSchema(): ApiResponse;

    /**
     * @throws AuthorizationFailedException
     */
    public function getConfig(): ApiResponse;

    /**
     * @throws AuthorizationFailedException
     */
    public function getEvents(): ApiResponse;

    /**
     * @throws AuthorizationFailedException
     */
    public function getInfo(): ApiResponse;

    /**
     * @throws AuthorizationFailedException
     */
    public function getOpenApiSchema(): ApiResponse;

    public function getSchema(string $entity): ?Schema;

    /**
     * @throws AuthorizationFailedException
     */
    public function getShopwareVersion(): string;

    public function parseSchema(array $schema): SchemaCollection;

    /**
     * @throws AuthorizationFailedException
     */
    public function refreshSchema(bool $persist = true): SchemaCollection;
}
