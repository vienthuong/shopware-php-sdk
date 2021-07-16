<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Webhook\AppAction;

use Vin\ShopwareSdk\Data\Struct;
use Vin\ShopwareSdk\Data\Webhook\Source;

class AppAction extends Struct
{
    private ?Source $source;

    private ?ActionData $data;

    private ?ActionMeta $meta;

    private array $headers;

    /**
     * Create the event from Event::createFromPayload.
     */
    private function __construct(?Source $source, ?ActionData $data, ?ActionMeta $meta, array $headers)
    {
        $this->source = $source;
        $this->data = $data;
        $this->meta = $meta;
        $this->headers = $headers;
    }
    
    public function getSource(): ?Source
    {
        return $this->source;
    }

    public function getData(): ?ActionData
    {
        return $this->data;
    }

    public function getMeta(): ?ActionMeta
    {
        return $this->meta;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public static function createFromPayload(array $payload, ?array $headers = []): self
    {
        $source = $action = $meta = null;

        if ($rawSource = $payload['source']) {
            $source = new Source($rawSource['url'], $rawSource['shopId'], (string) $rawSource['appVersion']);
        }


        if ($rawData = $payload['data']) {
            $action = new ActionData($rawData['ids'], $rawData['entity'], $rawData['action']);
        }

        if ($rawMeta = $payload['meta']) {
            $meta = new ActionMeta((int) $rawMeta['timestamp'], $rawMeta['reference'], $rawMeta['language']);
        }

        return new self($source, $action, $meta, $headers ?? []);
    }
}
