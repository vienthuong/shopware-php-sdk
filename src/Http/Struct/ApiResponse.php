<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Http\Struct;

use Vin\ShopwareSdk\Data\Context;

class ApiResponse
{
    public function __construct(
        private readonly array $contents,
        private readonly array $headers,
        private readonly int $statusCode,
        private readonly Context $context
    ) {
    }

    public function getContents(): array
    {
        return $this->contents;
    }

    public function getContext(): Context
    {
        return $this->context;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
}
