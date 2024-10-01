<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service\Struct;

use Vin\ShopwareSdk\Data\ParseAware;
use Vin\ShopwareSdk\Data\Struct;

class SyncOperator extends Struct implements ParseAware
{
    public const UPSERT_OPERATOR = 'upsert';

    public const DELETE_OPERATOR = 'delete';

    protected string $action;

    public function __construct(
        protected string $entity,
        string $action,
        protected array $payload
    ) {
        if ($action !== self::UPSERT_OPERATOR && $action !== self::DELETE_OPERATOR) {
            throw new \InvalidArgumentException('Action ' . $action . ' is not allowed, allowed types: upsert, delete');
        }
        $this->action = $action;
    }

    public function getEntity(): string
    {
        return $this->entity;
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

    public function parse(): array
    {
        return [
            'entity' => $this->entity,
            'action' => $this->action,
            'payload' => $this->payload,
        ];
    }
}
