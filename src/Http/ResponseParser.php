<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Http;

use Psr\Http\Message\ResponseInterface;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;

final class ResponseParser implements ResponseParserInterface
{
    public function checkResponseStatusCode(ResponseInterface $response): void
    {
        if ($response->getStatusCode() >= 400 && $response->getStatusCode() < 600) {
            $message = $response->getBody()
                ->getContents();

            throw new ShopwareResponseException($message, $response->getStatusCode());
        }
    }

    public function getDecodedResponseContent(ResponseInterface $response): array
    {
        $responseContent = $this->getResponseContent($response);
        if ($responseContent === '') {
            return [];
        }

        try {
            /** @var array<string|int, mixed> $decodedResponseContent */
            $decodedResponseContent = json_decode($responseContent, true, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException) {
            $message = sprintf('Failed to decode JSON response: %s', $responseContent);

            throw new ShopwareResponseException($message);
        }

        return $decodedResponseContent;
    }

    public function getResponseContent(ResponseInterface $response): string
    {
        $this->checkResponseStatusCode($response);

        return $response->getBody()
            ->getContents();
    }
}
