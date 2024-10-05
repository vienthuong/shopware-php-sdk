<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Psr\Http\Message\StreamInterface;
use Vin\ShopwareSdk\Data\Context;
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
     */
    public function delete(string $endpoint, array $params, array $additionalHeaders, Context $context): ApiResponse;

    /**
     * @param QueryParams $params
     * @param Headers $additionalHeaders
     */
    public function get(string $endpoint, array $params, array $additionalHeaders, Context $context): ApiResponse;

    /**
     * @param QueryParams $params
     * @param Body $data
     * @param Headers $additionalHeaders
     */
    public function patch(string $endpoint, array $params, $data, array $additionalHeaders, Context $context): ApiResponse;

    /**
     * @param QueryParams $params
     * @param Body $data
     * @param Headers $additionalHeaders
     */
    public function post(string $endpoint, array $params, $data, array $additionalHeaders, Context $context): ApiResponse;
}
