<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Webhook\Event;

use Vin\ShopwareSdk\Data\Struct;
use Vin\ShopwareSdk\Data\Webhook\Source;

class Event extends Struct
{
    /**
     * Create the event from Event::createFromPayload.
     */
    private function __construct(
        protected ?Source $source,
        protected ?EventData $data,
        protected int $timestamp,
        protected array $headers
    ) {
    }

    public function getSource(): ?Source
    {
        return $this->source;
    }

    public function getData(): ?EventData
    {
        return $this->data;
    }

    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public static function createFromPayload(array $payload, ?array $headers = []): self
    {
        $source = $data = null;

        if ($rawSource = $payload['source']) {
            $source = new Source($rawSource['url'], $rawSource['shopId'], (string) $rawSource['appVersion']);
        }

        if ($rawData = $payload['data']) {
            if (! empty($rawData['payload'])) {
                $data = new EventData($rawData['event'], $rawData['payload']);
            }
        }

        return new self($source, $data, (int) ($payload['timestamp'] ?? 0), $headers ?? []);
    }
}
