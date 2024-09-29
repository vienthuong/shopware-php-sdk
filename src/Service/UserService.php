<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Data\Entity\User\UserEntity;

/**
 * Class UserService
 * @package Vin\ShopwareSdk\Service
 */
class UserService extends ApiService
{
    private const USER_INFO_ENDPOINT = '/api/_info/me';

    public function me(array $headers = []): UserEntity
    {
        $response = $this->httpClient->get($this->getFullUrl(self::USER_INFO_ENDPOINT), [
            'headers' => $this->getBasicHeaders($headers),
        ]);

        $contents = self::handleResponse($response->getBody()->getContents(), $response->getHeaders());

        $response = new ApiResponse($contents, $response->getHeaders(), $response->getStatusCode());

        $data = $response->getContents()['data']['attributes'];

        $entity = new UserEntity();

        $entity->assignProperties($data);

        return $entity;
    }

    public function updateMe(array $headers = []): void
    {
        $this->httpClient->patch($this->getFullUrl(self::USER_INFO_ENDPOINT), [
            'headers' => $this->getBasicHeaders($headers),
        ]);
    }

    public function status(array $headers = []): void
    {
        $this->httpClient->post($this->getFullUrl('/api/_info/ping'), [
            'headers' => $this->getBasicHeaders($headers),
        ]);
    }

    public function upsertUser(string $userId, array $headers = []): void
    {
        $data['id'] = $userId;

        $this->httpClient->post($this->getFullUrl('/api/user'), [
            'body' => json_encode($data),
            'headers' => $this->getBasicHeaders($headers),
        ]);
    }

    public function deleteUser(string $userId, array $headers = []): void
    {
        $data = [
            'user-verified' => true,
        ];

        $this->httpClient->delete($this->getFullUrl('/api/user/' . $userId), [
            'body' => json_encode($data),
            'headers' => $this->getBasicHeaders($headers),
        ]);
    }

    public function upsertRole(array $headers = [], ?string $roleId = null): void
    {
        $data = [
            'user-verified' => true,
        ];

        if ($roleId) {
            $data['id'] = $roleId;
        }

        $this->httpClient->post($this->getFullUrl('/api/acl-role'), [
            'body' => json_encode($data),
            'headers' => $this->getBasicHeaders($headers),
        ]);
    }

    public function deleteUserRole(string $userId, string $roleId, array $headers = []): void
    {
        $data = [
            'user-verified' => true,
        ];

        $this->httpClient->delete($this->getFullUrl(sprintf('/api/user/%s/acl-role/%s', $userId, $roleId)), [
            'body' => json_encode($data),
            'headers' => $this->getBasicHeaders($headers),
        ]);
    }

    public function deleteRole(string $roleId, array $headers = []): void
    {
        $data = [
            'user-verified' => true,
        ];

        $this->httpClient->delete($this->getFullUrl(sprintf('/api/acl-role/%s', $roleId)), [
            'body' => json_encode($data),
            'headers' => $this->getBasicHeaders($headers),
        ]);
    }
}
