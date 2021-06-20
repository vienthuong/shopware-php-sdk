<?php declare(strict_types=1);


namespace Vin\ShopwareSdk\Service;

class ApiResponse
{
    private array $headers;

    private array $contents;

    private int $statusCode;

    public function __construct(array $contents, array $headers, int $statusCode)
    {
        $this->headers = $headers;
        $this->contents = $contents;
        $this->statusCode = $statusCode;
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
