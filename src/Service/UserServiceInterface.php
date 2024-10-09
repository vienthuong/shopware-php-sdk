<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Exception\AuthorizationFailedException;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;

interface UserServiceInterface
{
    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function deleteRole(string $roleId, array $additionalHeaders = []): void;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function deleteUser(string $userId, array $additionalHeaders = []): void;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function deleteUserRole(string $userId, string $roleId, array $additionalHeaders = []): void;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function me(array $additionalHeaders = []): Entity;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function status(array $additionalHeaders = []): void;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function updateMe(array $data, array $additionalHeaders = []): void;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function upsertRole(string $roleId, array $additionalHeaders = []): void;

    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function upsertUser(string $userId, array $additionalHeaders = []): void;
}
