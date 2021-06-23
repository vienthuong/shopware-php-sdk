<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Uuid\Exception;

class InvalidUuidException extends \Exception
{
    public function __construct(string $uuid)
    {
        parent::__construct(sprintf('Value is not a valid UUID: {{ %s }}', $uuid));
    }

    public function getErrorCode(): string
    {
        return 'FRAMEWORK__INVALID_UUID';
    }

    public function getStatusCode(): int
    {
        return 400;
    }
}
