<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Webhook\Event;

use Vin\ShopwareSdk\Data\Struct;

class EventData extends Struct
{
    private string $event;

    private array $payload;

    public function __construct(string $event, array $payload)
    {
        $this->event = $event;
        $this->payload = $payload;
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
