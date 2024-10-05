<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Data\Context;

final class StateMachineService implements StateMachineServiceInterface
{
    public function __construct(
        private readonly ApiServiceInterface $apiService,
        private readonly Context $context
    ) {
    }

    public function getState(string $entity, string $entityId, array $data = [], array $additionalHeaders = []): ApiResponse
    {
        $path = sprintf('/api/_action/state-machine/%s/%s/state', $entity, $entityId);
        $stateFieldName = array_key_exists('stateFieldName', $data) ? $data['stateFieldName'] : 'stateId';

        return $this->apiService->get($path, [
            'stateFieldName' => $stateFieldName,
        ], $additionalHeaders, $this->context);
    }

    public function transitionState(string $entity, string $entityId, string $actionName, array $data = [], array $additionalHeaders = []): void
    {
        $path = sprintf('/api/_action/state-machine/%s/%s/state/%s', $entity, $entityId, $actionName);
        $stateFieldName = array_key_exists('stateFieldName', $data) ? $data['stateFieldName'] : 'stateId';

        $this->apiService->post($path, [
            'stateFieldName' => $stateFieldName,
        ], null, $additionalHeaders, $this->context);
    }
}
