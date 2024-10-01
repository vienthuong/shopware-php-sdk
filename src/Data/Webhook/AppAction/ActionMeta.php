<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Webhook\AppAction;

use Vin\ShopwareSdk\Data\Struct;

class ActionMeta extends Struct
{
    public function __construct(
        protected int $timestamp,
        protected string $reference,
        protected string $language
    ) {
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
