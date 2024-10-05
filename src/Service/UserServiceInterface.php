<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Data\Entity\Entity;

interface UserServiceInterface
{
    public function deleteRole(string $roleId, array $additionalHeaders = []): void;

    public function deleteUser(string $userId, array $additionalHeaders = []): void;

    public function deleteUserRole(string $userId, string $roleId, array $additionalHeaders = []): void;

    public function me(array $additionalHeaders = []): Entity;

    public function status(array $additionalHeaders = []): void;

    public function updateMe(array $data, array $additionalHeaders = []): void;

    public function upsertRole(string $roleId, array $additionalHeaders = []): void;

    public function upsertUser(string $userId, array $additionalHeaders = []): void;
}
