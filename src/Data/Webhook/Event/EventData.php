<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Webhook\Event;

use Vin\ShopwareSdk\Data\Struct;

class EventData extends Struct
{
    public function __construct(
        protected string $event,
        protected array $payload
    ) {
    }

    public function getEvent(): string
    {
        return $this->event;
    }

    public function getPayload(): array
    {
        return $this->payload;
    }
}
