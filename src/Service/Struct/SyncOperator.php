<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Service\Struct;

use Vin\ShopwareSdk\Data\Struct;

class SyncOperator extends Struct
{
    public const UPSERT_OPERATOR = 'upsert';

    public const DELETE_OPERATOR = 'delete';

    protected string $entity;

    protected string $action;

    protected array $payload;

    public function __construct(string $entity, string $action, array $payload)
    {
        if ($action !== self::UPSERT_OPERATOR && $action !== self::DELETE_OPERATOR) {
            throw new \InvalidArgumentException('Action ' . $action . ' is not allowed, allowed types: upsert, delete');
        }

        $this->entity = $entity;
        $this->action = $action;
        $this->payload = $payload;
    }

    public function addPayload(array $item): void
    {
        $this->payload[] = $item;
    }

    public function getPayload(): array
    {
        return $this->payload;
    }

    public function setPayload(array $payload): void
    {
        $this->payload = $payload;
    }
}
