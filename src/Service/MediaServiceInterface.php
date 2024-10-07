<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Exception\AuthorizationFailedException;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Service\Struct\ApiResponse;

interface MediaServiceInterface
{
    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function provideName(string $fileName, string $extension, ?string $mediaId = null): string;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function renameMedia(string $mediaId, string $fileName): ApiResponse;

    /**
     * @param string|resource|array $data
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function uploadMediaById(string $mediaId, string $mimeType, $data, string $extension, ?string $fileName = null): ApiResponse;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function uploadMediaFromUrl(string $mediaId, string $url, string $extension, ?string $fileName = null): ApiResponse;
}
