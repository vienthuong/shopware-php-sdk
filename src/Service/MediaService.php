<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use GuzzleHttp\Exception\BadResponseException;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Service\Struct\ApiResponse;

final class MediaService implements MediaServiceInterface
{
    public function __construct(
        private readonly ApiServiceInterface $apiService,
    ) {
    }

    public function provideName(string $fileName, string $extension, ?string $mediaId = null): string
    {
        $path = '/api/_action/media/provide-name';
        $params = array_filter([
            'extension' => $extension,
            'fileName' => $fileName,
            'mediaId' => $mediaId,
        ]);

        try {
            $apiResponse = $this->apiService->get($path, $params, []);

            return $apiResponse->getContents()['fileName'];
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    public function renameMedia(string $mediaId, string $fileName): ApiResponse
    {
        $path = sprintf('/api/_action/media/%s/rename', $mediaId);
        /** @var string $data */
        $data = json_encode([
            'fileName' => $fileName,
        ]);

        try {
            return $this->apiService->post($path, [], $data, []);
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    public function uploadMediaById(string $mediaId, string $mimeType, $data, string $extension, ?string $fileName = null): ApiResponse
    {
        $fileName ??= $mediaId;
        $params = [
            'fileName' => $fileName,
            'extension' => $extension,
        ];
        $path = sprintf('/api/_action/media/%s/upload', $mediaId);
        if (is_array($data)) {
            /** @var string $data */
            $data = json_encode($data);
        }

        try {
            return $this->apiService->post($path, $params, $data, [
                'Content-Type' => $mimeType,
            ]);
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    public function uploadMediaFromUrl(string $mediaId, string $url, string $extension, ?string $fileName = null): ApiResponse
    {
        $data = [
            'url' => $url,
        ];

        return $this->uploadMediaById($mediaId, 'application/json', $data, $extension, $fileName);
    }
}
