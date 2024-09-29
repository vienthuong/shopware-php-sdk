<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use GuzzleHttp\Exception\BadResponseException;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;

/**
 * Gateway for the API end point "media"
 *
 * Class AdminActionService
 * @package Vin\ShopwareSdk\Service
 */
class MediaService extends ApiService
{
    /**
     * @param string|resource|array $data
     */
    public function uploadMediaById(string $mediaId, string $mimeType, $data, string $extension, ?string $fileName = null): ApiResponse
    {
        $fileName ??= $mediaId;
        $params = [
            'fileName' => $fileName,
            'extension' => $extension,
        ];
        $path = sprintf('/api/_action/media/%s/upload', $mediaId);

        try {
            $response = $this->httpClient->post($this->buildQueryUrl($path, $params), [
                'headers' => $this->getBasicHeaders([
                    'Content-Type' => $mimeType,
                ]),
                'body' => is_array($data) ? json_encode($data) : $data,
            ]);

            $contents = self::handleResponse($response->getBody()->getContents(), $response->getHeaders());

            return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode());
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

    public function renameMedia(string $mediaId, string $fileName): ApiResponse
    {
        $path = sprintf('/api/_action/media/%s/rename', $mediaId);

        try {
            $response = $this->httpClient->post($this->getFullUrl($path), [
                'headers' => $this->getBasicHeaders(),
                'body' => json_encode([
                    'fileName' => $fileName,
                ]),
            ]);

            $contents = self::handleResponse($response->getBody()->getContents(), $response->getHeaders());

            return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode());
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
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
            $response = $this->httpClient->get($this->buildQueryUrl($path, $params), [
                'headers' => $this->getBasicHeaders(),
            ]);

            $contents = self::handleResponse($response->getBody()->getContents(), $response->getHeaders());

            return (new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode()))->getContents()['fileName'];
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }
}
