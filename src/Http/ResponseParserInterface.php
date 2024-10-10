<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Http;

use Psr\Http\Message\ResponseInterface;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;

interface ResponseParserInterface
{
    /**
     * @throws ShopwareResponseException
     */
    public function checkResponseStatusCode(ResponseInterface $response): void;

    /**
     * @throws ShopwareResponseException
     */
    public function getDecodedResponseContent(ResponseInterface $response): array;

    /**
     * @throws ShopwareResponseException
     */
    public function getResponseContent(ResponseInterface $response): string;
}
