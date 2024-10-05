<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

interface StateMachineServiceInterface
{
    public function getState(string $entity, string $entityId, array $data = [], array $additionalHeaders = []): ApiResponse;

    public function transitionState(string $entity, string $entityId, string $actionName, array $data = [], array $additionalHeaders = []): void;
}
