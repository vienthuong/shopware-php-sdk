<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Webhook\Event;

use Vin\ShopwareSdk\Data\Struct;
use Vin\ShopwareSdk\Service\Webhook\Source;

class Event extends Struct
{
    private ?Source $source;

    private ?EventData $data;

    private int $timestamp;

    private array $headers;

    /**
     * Create the event from Event::createFromPayload.
     */
    private function __construct(?Source $source, ?EventData $data, int $timestamp, array $headers)
    {
        $this->source = $source;
        $this->data = $data;
        $this->timestamp = $timestamp;
        $this->headers = $headers;
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
            $source = new Source($rawSource['url'], $rawSource['shopId'], (int) $rawSource['appVersion']);
        }


        if ($rawData = $payload['data']) {
            if (!empty($rawData['payload'])) {
                $data = new EventData($rawData['event'], $rawData['payload']);
            }
        }

        return new self($source, $data, $payload['timestamp'] ? (int) $payload['timestamp'] : null, $headers);
    }
}
