<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use GuzzleHttp\Exception\BadResponseException;
use Vin\ShopwareSdk\Data\Mail\Mail;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Service\Struct\ApiResponse;

final class MailSendService implements MailSendServiceInterface
{
    private const BUILD_PATH = '/api/_action/mail-template/build';

    private const SEND_PATH = '/api/_action/mail-template/send';

    public function __construct(
        private readonly ApiServiceInterface $apiService,
    ) {
    }

    public function build(string $content, array $templateData, array $additionalHeaders = []): ApiResponse
    {
        $data = [
            'mailTemplate' => [
                'contentHtml' => $content,
            ],
            'mailTemplateType' => [
                'templateData' => $templateData,
            ],
        ];
        /** @var string $data */
        $data = json_encode($data);

        try {
            return $this->apiService->post(self::BUILD_PATH, [], $data, $additionalHeaders);
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }

    public function send(Mail $mail, array $additionalHeaders = []): ApiResponse
    {
        /** @var string $data */
        $data = json_encode(array_filter($mail->jsonSerialize()));

        try {
            return $this->apiService->post(self::SEND_PATH, [], $data, $additionalHeaders);
        } catch (BadResponseException $exception) {
            $message = $exception->getResponse()
                ->getBody()
                ->getContents();
            throw new ShopwareResponseException($message, $exception->getResponse()->getStatusCode(), $exception);
        }
    }
}
