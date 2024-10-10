<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Service\Api\ApiServiceInterface;
use Vin\ShopwareSdk\Http\Struct\ApiResponse;

final class StateMachineService implements StateMachineServiceInterface
{
    public function __construct(
        private readonly ApiServiceInterface $apiService,
    ) {
    }

    public function getState(string $entity, string $entityId, array $data = [], array $additionalHeaders = []): ApiResponse
    {
        $endpoint = sprintf('/api/_action/state-machine/%s/%s/state', $entity, $entityId);
        $stateFieldName = array_key_exists('stateFieldName', $data) ? $data['stateFieldName'] : 'stateId';
        $params = [
            'stateFieldName' => $stateFieldName,
        ];

        return $this->apiService->get($endpoint, params: $params, additionalHeaders: $additionalHeaders);
    }

    public function transitionState(string $entity, string $entityId, string $actionName, array $data = [], array $additionalHeaders = []): void
    {
        $path = sprintf('/api/_action/state-machine/%s/%s/state/%s', $entity, $entityId, $actionName);
        $stateFieldName = array_key_exists('stateFieldName', $data) ? $data['stateFieldName'] : 'stateId';
        $params = [
            'stateFieldName' => $stateFieldName,
        ];

        $this->apiService->post($path, $params, additionalHeaders: $additionalHeaders);
    }
}
