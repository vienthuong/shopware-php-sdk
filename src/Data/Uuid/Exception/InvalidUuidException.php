<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Uuid\Exception;

use Symfony\Component\HttpFoundation\Response;

class InvalidUuidException extends \Exception
{
    public function __construct(string $uuid)
    {
        parent::__construct('Value is not a valid UUID: {{ input }}', ['input' => $uuid]);
    }

    public function getErrorCode(): string
    {
        return 'FRAMEWORK__INVALID_UUID';
    }

    public function getStatusCode(): int
    {
        return Response::HTTP_BAD_REQUEST;
    }
}
