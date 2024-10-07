<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Psr\Http\Message\StreamInterface;
use Vin\ShopwareSdk\Exception\AuthorizationFailedException;
use Vin\ShopwareSdk\Service\Struct\ApiResponse;

/**
 * @phpstan-type QueryParams array<string, array|string|int|float|bool|null>
 * @phpstan-type Headers array<string, string|int|float|null>
 * @phpstan-type Body resource|string|null|int|float|StreamInterface|callable|\Iterator
 */
interface ApiServiceInterface
{
    /**
     * @param QueryParams $params
     * @param Headers $additionalHeaders
     * @throws AuthorizationFailedException
     */
    public function delete(string $endpoint, array $params, array $additionalHeaders): ApiResponse;

    /**
     * @param QueryParams $params
     * @param Headers $additionalHeaders
     * @throws AuthorizationFailedException
     */
    public function get(string $endpoint, array $params, array $additionalHeaders): ApiResponse;

    /**
     * @param QueryParams $params
     * @param Body $data
     * @param Headers $additionalHeaders
     * @throws AuthorizationFailedException
     */
    public function patch(string $endpoint, array $params, $data, array $additionalHeaders): ApiResponse;

    /**
     * @param QueryParams $params
     * @param Body $data
     * @param Headers $additionalHeaders
     * @throws AuthorizationFailedException
     */
    public function post(string $endpoint, array $params, $data, array $additionalHeaders): ApiResponse;
}
