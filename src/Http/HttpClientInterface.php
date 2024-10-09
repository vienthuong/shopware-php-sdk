<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Http;

use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Exception\AuthorizationFailedException;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Http\Struct\ApiResponse;
use Vin\ShopwareSdk\Http\Struct\MediaType;

interface HttpClientInterface
{
    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function delete(string $path, MediaType $contentTypeHeader, MediaType $acceptHeader, Context $context): ApiResponse;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function get(string $path, MediaType $contentTypeHeader, MediaType $acceptHeader, Context $context): ApiResponse;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function patch(string $path, MediaType $contentTypeHeader, MediaType $acceptHeader, array $data, Context $context): ApiResponse;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function post(string $path, MediaType $contentTypeHeader, MediaType $acceptHeader, array $data, Context $context): ApiResponse;

    /**
     * @param string|resource $data
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function postGenericData(string $path, MediaType $contentTypeHeader, MediaType $acceptHeader, $data, Context $context): ApiResponse;
}
