<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service\Api;

use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Exception\AuthorizationFailedException;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Http\Struct\MediaType;
use Vin\ShopwareSdk\Http\Struct\ApiResponse;

/**
 * @phpstan-type QueryParams array<string, array|string|int|float|bool|null>
 * @phpstan-import-type Headers from Context
 * @phpstan-type Data array<string|int, mixed>|null
 */
interface ApiServiceInterface
{
    /**
     * @param QueryParams $params
     * @param Headers $additionalHeaders
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function delete(
        string $endpoint,
        array $params = [],
        MediaType $contentTypeHeader = MediaType::APPLICATION_JSON,
        MediaType $acceptHeader = MediaType::APPLICATION_JSON_API,
        array $additionalHeaders = []
    ): ApiResponse;

    /**
     * @param QueryParams $params
     * @param Headers $additionalHeaders
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function get(
        string $endpoint,
        array $params = [],
        MediaType $contentTypeHeader = MediaType::APPLICATION_JSON,
        MediaType $acceptHeader = MediaType::APPLICATION_JSON_API,
        array $additionalHeaders = []
    ): ApiResponse;

    /**
     * @param QueryParams $params
     * @param Data $data
     * @param Headers $additionalHeaders
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function patch(
        string $endpoint,
        array $params = [],
        ?array $data = null,
        MediaType $contentTypeHeader = MediaType::APPLICATION_JSON,
        MediaType $acceptHeader = MediaType::APPLICATION_JSON_API,
        array $additionalHeaders = []
    ): ApiResponse;

    /**
     * @param QueryParams $params
     * @param Data $data
     * @param Headers $additionalHeaders
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function post(
        string $endpoint,
        array $params = [],
        ?array $data = null,
        MediaType $contentTypeHeader = MediaType::APPLICATION_JSON,
        MediaType $acceptHeader = MediaType::APPLICATION_JSON_API,
        array $additionalHeaders = []
    ): ApiResponse;

    /**
     * @param QueryParams $params
     * @param string|resource $data
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function postMediaFile(string $endpoint, array $params, $data): ApiResponse;
}
