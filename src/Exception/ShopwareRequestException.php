<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Exception;

use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Message\RequestInterface;

final class ShopwareRequestException extends \RuntimeException
{
    public function __construct(
        ClientExceptionInterface $clientException,
        public readonly RequestInterface $request
    ) {
        parent::__construct($clientException->getMessage(), $clientException->getCode(), $clientException);
    }
}
