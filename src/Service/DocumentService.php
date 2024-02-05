<?php

namespace Vin\ShopwareSdk\Service;

class DocumentService extends ApiService
{
    private const DOCUMENT_DOWNLOAD_ENDPOINT = '/api/_action/document/%s/%s?download=1';
    private const INVOICE_DOCUMENT_CREATE_ENDPOINT = '/api/_action/document/invoice/create';

    public function downloadDocumentPdfByIdAndDeepLink($documentId, $documentDeeplink)
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