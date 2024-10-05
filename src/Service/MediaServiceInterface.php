<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Service\Struct\ApiResponse;

interface MediaServiceInterface
{
    /**
     * @throws ShopwareResponseException
     */
    public function provideName(string $fileName, string $extension, ?string $mediaId = null): string;

    /**
     * @throws ShopwareResponseException
     */
    public function renameMedia(string $mediaId, string $fileName): ApiResponse;

    /**
     * @param string|resource|array $data
     * @throws ShopwareResponseException
     */
    public function uploadMediaById(string $mediaId, string $mimeType, $data, string $extension, ?string $fileName = null): ApiResponse;

    /**
     * @throws ShopwareResponseException
     */
    public function uploadMediaFromUrl(string $mediaId, string $url, string $extension, ?string $fileName = null): ApiResponse;
}
