<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Definition\DefinitionProviderInterface;
use Vin\ShopwareSdk\Service\Api\ApiServiceInterface;

final class UserService implements UserServiceInterface
{
    private const USER_ROLE_ENDPOINT = '/api/acl-role';

    private const USER_ENDPOINT = '/api/user';

    private const USER_INFO_ENDPOINT = '/api/_info/me';

    private const USER_PING_ENDPOINT = '/api/_info/ping';

    public function __construct(
        private readonly ApiServiceInterface $apiService,
        private readonly DefinitionProviderInterface $definitionProvider,
    ) {
    }

    public function deleteRole(string $roleId, array $additionalHeaders = []): void
    {
        $this->apiService->delete(self::USER_ROLE_ENDPOINT . '/' . $roleId, additionalHeaders: $additionalHeaders);
    }

    public function deleteUser(string $userId, array $additionalHeaders = []): void
    {
        $this->apiService->delete(self::USER_ENDPOINT . '/' . $userId, additionalHeaders: $additionalHeaders);
    }

    public function deleteUserRole(string $userId, string $roleId, array $additionalHeaders = []): void
    {
        $this->apiService->delete(self::USER_ENDPOINT . '/' . $userId . '/acl-role/' . $roleId, additionalHeaders: $additionalHeaders);
    }

    public function me(array $additionalHeaders = []): Entity
    {
        $apiResponse = $this->apiService->get(self::USER_INFO_ENDPOINT, additionalHeaders: $additionalHeaders);
        $data = $apiResponse->getContents()['data']['attributes'];

        $userDefinition = $this->definitionProvider->getDefinition('user');
        /** @var class-string<Entity> $entityClass */
        $entityClass = $userDefinition->getEntityClass();
        /** @var Entity $entity */
        $entity = new $entityClass();
        $entity->assignProperties($data);

        return $entity;
    }

    public function status(array $additionalHeaders = []): void
    {
        $this->apiService->post(self::USER_PING_ENDPOINT, additionalHeaders: $additionalHeaders);
    }

    public function updateMe(array $data, array $additionalHeaders = []): void
    {
        $this->apiService->patch(self::USER_INFO_ENDPOINT, data: $data, additionalHeaders: $additionalHeaders);
    }

    public function upsertRole(string $roleId, array $additionalHeaders = []): void
    {
        $data = [
            'id' => $roleId,
        ];

        $this->apiService->post(self::USER_ENDPOINT, data: $data, additionalHeaders: $additionalHeaders);
    }

    public function upsertUser(string $userId, array $additionalHeaders = []): void
    {
        $data = [
            'id' => $userId,
        ];

        $this->apiService->post(self::USER_ENDPOINT, data: $data, additionalHeaders: $additionalHeaders);
    }
}
