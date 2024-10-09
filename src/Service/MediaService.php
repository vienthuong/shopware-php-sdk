<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Service\Api\ApiServiceInterface;
use Vin\ShopwareSdk\Http\Struct\ApiResponse;

final class MediaService implements MediaServiceInterface
{
    private const PROVIDE_NAME_ENDPOINT = '/api/_action/media/provide-name';

    private const RENAME_ENDPOINT = '/api/_action/media/%s/rename';

    private const UPLOAD_ENDPOINT = '/api/_action/media/%s/upload';

    public function __construct(
        private readonly ApiServiceInterface $apiService,
    ) {
    }

    public function provideName(string $fileName, string $extension, ?string $mediaId = null): string
    {
        $params = array_filter([
            'extension' => $extension,
            'fileName' => $fileName,
            'mediaId' => $mediaId,
        ]);

        $apiResponse = $this->apiService->get(self::PROVIDE_NAME_ENDPOINT, $params);

        return $apiResponse->getContents()['fileName'];
    }

    public function renameMedia(string $mediaId, string $fileName): ApiResponse
    {
        $endpoint = sprintf(self::RENAME_ENDPOINT, $mediaId);
        $data = [
            'fileName' => $fileName,
        ];

        return $this->apiService->post($endpoint, data: $data);
    }

    public function uploadMediaById(string $mediaId, $data, string $extension, ?string $fileName = null): ApiResponse
    {
        $endpoint = sprintf(self::UPLOAD_ENDPOINT, $mediaId);
        $params = $this->buildUploadParams($mediaId, $extension, $fileName);

        return $this->apiService->postMediaFile($endpoint, $params, $data);
    }

    public function uploadMediaFromUrl(string $mediaId, string $url, string $extension, ?string $fileName = null): ApiResponse
    {
        $data = [
            'url' => $url,
        ];
        $endpoint = sprintf(self::UPLOAD_ENDPOINT, $mediaId);
        $params = $this->buildUploadParams($mediaId, $extension, $fileName);

        return $this->apiService->post($endpoint, $params, $data);
    }

    private function buildUploadParams(string $mediaId, string $extension, ?string $fileName): array
    {
        $fileName ??= $mediaId;

        return [
            'extension' => $extension,
            'fileName' => $fileName,
        ];
    }
}
