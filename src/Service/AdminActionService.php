<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

/**
 * This class is used for calling admin _action apis that are not defined by the SDK yet
 *
 * Class AdminActionService
 * @package Vin\ShopwareSdk\Service
 */
class AdminActionService extends ApiService
{
    /**
     * @param array|string|resource $data
     */
    public function execute(string $method, string $path, $data, array $headers = []): ApiResponse
    {
        if (!in_array(strtolower($method), ['get', 'post', 'put', 'patch', 'delete'])) {
            throw new \InvalidArgumentException('Method ' . $method . ' is not supported');
        }

        $response = $this->httpClient->$method($this->getFullUrl($path), [
            'body' => is_array($data) ? json_encode($data) : $data,
            'headers' => $this->getBasicHeaders($headers)
        ]);

        $contents = self::handleResponse($response->getBody()->getContents(), $response->getHeaders());

        return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode());
    }
}
