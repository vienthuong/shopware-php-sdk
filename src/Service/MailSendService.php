<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use GuzzleHttp\Exception\BadResponseException;
use Vin\ShopwareSdk\Data\Mail\Mail;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;

class MailSendService extends ApiService
{
    private const SEND_PATH = '/api/_action/mail-template/send';

    private const BUILD_PATH = '/api/_action/mail-template/build';

    public function send(
        Mail $mail,
        array $additionalHeaders = []
    ): ApiResponse {
        try {
            $response = $this->httpClient->post(
                $this->getFullUrl(self::SEND_PATH),
                [
                    'headers' => $this->getBasicHeaders($additionalHeaders),
                    'body' => json_encode(array_filter($mail->jsonSerialize())),
                ]
            );

            $contents = self::handleResponse($response->getBody()->getContents(), $response->getHeaders());

            return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode());
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    public function build(
        string $content,
        array $templateData,
        array $additionalHeaders = []
    ): ApiResponse {
        try {
            $response = $this->httpClient->post(
                $this->getFullUrl(self::BUILD_PATH),
                [
                    'headers' => $this->getBasicHeaders($additionalHeaders),
                    'body' => json_encode([
                        'mailTemplate' => [
                            'contentHtml' => $content,
                        ],
                        'mailTemplateType' => [
                            'templateData' => $templateData,
                        ],
                    ]),
                ]
            );

            $contents = self::handleResponse($response->getBody()->getContents(), $response->getHeaders());

            return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode());
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }
}
