<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service\Struct;

use Vin\ShopwareSdk\Data\ParseAware;
use Vin\ShopwareSdk\Data\Struct;

class Notification extends Struct implements ParseAware
{
    public const ERROR = 'error';

    public const WARNING = 'warning';

    public const SUCCESS = 'success';

    public const INFO = 'info';

    private function __construct(
        private readonly string $status,
        private readonly string $message,
        private readonly bool $adminOnly = false,
        private readonly array $requiredPrivileges = []
    ) {
    }

    public static function createNotificationSuccess(string $message, bool $adminOnly = false, array $requiredPrivileges = []): self
    {
        return self::create(self::SUCCESS, $message, $adminOnly, $requiredPrivileges);
    }

    public static function createNotificationError(string $message, bool $adminOnly = false, array $requiredPrivileges = []): self
    {
        return self::create(self::ERROR, $message, $adminOnly, $requiredPrivileges);
    }

    public static function createNotificationWarning(string $message, bool $adminOnly = false, array $requiredPrivileges = []): self
    {
        return self::create(self::WARNING, $message, $adminOnly, $requiredPrivileges);
    }

    public static function createNotificationInfo(string $message, bool $adminOnly = false, array $requiredPrivileges = []): self
    {
        return self::create(self::INFO, $message, $adminOnly, $requiredPrivileges);
    }

    public static function create(string $status, string $message, bool $adminOnly = false, array $requiredPrivileges = []): self
    {
        return new self($status, $message, $adminOnly, $requiredPrivileges);
    }

    public function parse(): array
    {
        return [
            'status' => $this->status,
            'message' => $this->message,
            'adminOnly' => $this->adminOnly,
            'requiredPrivileges' => $this->requiredPrivileges,
        ];
    }
}
