<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

class ApiResponse
{
    public function __construct(
        private readonly array $contents,
        private readonly array $headers,
        private readonly int $statusCode
    ) {
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getContents(): array
    {
        return $this->contents;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
}
