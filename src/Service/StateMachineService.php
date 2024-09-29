<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

/**
 * Class StateMachineService
 * @package Vin\ShopwareSdk\Service
 */
class StateMachineService extends ApiService
{
    public function getState(string $entity, string $entityId, array $data = [], array $headers = []): ApiResponse
    {
        $data['stateFieldName'] = array_key_exists('stateFieldName', $data) ? $data['stateFieldName'] : 'stateId';

        $path = sprintf('/api/_action/state-machine/%s/%s/state', $entity, $entityId);

        $response = $this->httpClient->get($this->getFullUrl($path), [
            'body' => json_encode($data),
            'headers' => $this->getBasicHeaders($headers),
        ]);

        $contents = self::handleResponse($response->getBody()->getContents(), $response->getHeaders());

        return new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode());
    }

    public function transitionState(string $entity, string $entityId, string $actionName, array $data = [], array $headers = []): void
    {
        $data['stateFieldName'] = array_key_exists('stateFieldName', $data) ? $data['stateFieldName'] : 'stateId';

        $path = sprintf('/api/_action/state-machine/%s/%s/state/%s', $entity, $entityId, $actionName);

        $this->httpClient->post($this->getFullUrl($path), [
            'body' => json_encode($data),
            'headers' => $this->getBasicHeaders($headers),
        ]);
    }
}
