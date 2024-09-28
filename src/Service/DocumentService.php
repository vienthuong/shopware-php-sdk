<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

class DocumentService extends ApiService
{
    private const DOCUMENT_DOWNLOAD_ENDPOINT = '/api/_action/document/%s/%s?download=1';

    public function downloadDocumentPdfByIdAndDeepLink(string $documentId, string $documentDeeplink): string
    {
        $path = sprintf(self::DOCUMENT_DOWNLOAD_ENDPOINT, $documentId, $documentDeeplink);

        $response = $this->httpClient->get(
            $this->getFullUrl($path),
            [
                'headers' => $this->getBasicHeaders(),
            ]
        );

        return $response->getBody()->getContents();
    }
}