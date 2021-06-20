<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Webhook\AppAction;

use Vin\ShopwareSdk\Data\Struct;

class ActionMeta extends Struct
{
    private int $timestamp;

    private string $reference;

    private string $language;

    public function __construct(int $timestamp, string $reference, string $language)
    {
        $this->timestamp = $timestamp;
        $this->reference = $reference;
        $this->language = $language;
    }

    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    public function getReference(): string
    {
        return $this->reference;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }
}
