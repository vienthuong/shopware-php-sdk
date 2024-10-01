<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Uuid\Exception;

class InvalidUuidLengthException extends \Exception
{
    public function __construct(int $length, string $hex)
    {
        parent::__construct(sprintf(
            'UUID has a invalid length. 16 bytes expected, {{ %s }} given. Hexadecimal reprensentation: {{ %s }}',
            $length,
            $hex
        ));
    }

    public function getErrorCode(): string
    {
        return 'FRAMEWORK__UUID_INVALID_LENGTH';
    }

    public function getStatusCode(): int
    {
        return 400;
    }
}
